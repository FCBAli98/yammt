<?php

namespace App\Repositories;

use App\Models\Category;

class MenuRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new Category();
        $this->model->lang = \App::getLocale();
        $this->model->type = 'menu';
    }

    public function getIndex()
    {
        $model = $this->search([
            'title' => 'ilike',
            'parent_id' => 'int'
        ]);
         return $model->where(['type' => $this->model->type])->with(['translatesCheck', 'translates'])->orderBy('id', 'desc')->paginate($this->limit);
    }

    public function create($data)
    {
        $this->model->title = $data['title'];
        $this->model->lang = $data['lang'];
        $this->model->parent_id = $data['parent_id'];
        if ($this->model->save())
        {
            return $this->model;
        }
        return false;
    }


    public function update($id, $data)
    {
        $model = $this->findById($id);
        $model->title = $data['title'];
        $model->lang = $data['lang'];
        $model->parent_id = $data['parent_id'];
        if ($model->save())
        {
            return $this->model;
        }
        return false;
    }
}
