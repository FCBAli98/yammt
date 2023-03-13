<?php

namespace App\Repositories;

use App\Models\Translate;

class BaseRepository
{
    public $limit = 20;
    public $model;

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function getModel()
    {
        return $this->model;
    }
    public function getLanguagesArr()
    {
        return array_column_ext(\Config::get('laravellocalization.supportedLocales'), 'native', -1);
    }

    public function getLocaleListForLangParam()
    {
        $arr = [];
        if (\Config::get('laravellocalization.supportedLocales'))
        {
            foreach (\Config::get('laravellocalization.supportedLocales') as $lang => $locale)
            {
                $arr[$lang] = [
                  'name' => $locale['native'],
                  'active' => isset($_GET['lang'])?($_GET['lang']):(\App::getLocale() == $lang)
                ];
            }
        }
        return $arr;
    }

    public function search($types = [])
    {
        $searchRequestParams = app('request')->input('search');
        $where = [];
        $idArr = ['empty' => 1];
        if ($searchRequestParams){
            foreach ($searchRequestParams as $key => $item){
                if ($item != null){
                    if (isset($types[$key]) && $types[$key] == 'ilike'){
                        if (isset($idArr['empty'])){
                            $idArr = ['first' => 1];
                        }
                        $translatesQuery = Translate::select(['object_id'])->where(['object_type' => $this->model->type])->where(['object_key' => $key])->where('object_value','ilike','%'.$item.'%');
                        if (!isset($idArr['first'])){
                            $translatesQuery->whereIn('object_id', $idArr);
                        }
                        $idArr = $translatesQuery->get()->toArray();
                        if ($idArr){
                            $idArr = array_column($idArr, 'object_id');
                        }

                    }elseif(isset($types[$key]) && $types[$key] == 'date'){
                        $date = date('Y-m-d', strtotime($item));
                        $where[] = [$key, '=', $date];
                    }else{
                        $where[] = [$key, '=', $date];
                    }
                }
            }
        }
        $query = $this->model->where($where);
        if (!isset($idArr['empty'])){
           $query->whereIn('id', $idArr);
        }
        return $query;
    }
}
