<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{

    protected $table = 'translates';
    public $timestamps = false;
    protected $guarded = [];

    public static function saveTranslations($model,$key,$value,$type,$language = false)
    {
        if ($value)
        {
          $translate = $model->translates->firstWhere('object_key','=',$key);

            if (!$translate)
            {
                $translate = new Translate();
                $translate->object = $type;
                $translate->object_type = $model->type;
                $translate-> object_id = $model->id;
                $translate->object_key = $key;
                $translate->languages = $language?$language:\App::getLocale();
            }
            $translate->object_value = $value;
            $translate->save();
        }else{
            $translate = $model->translates->firstWhere('object_key','=',$key);
            if ($translate){
                $translate->delete();
            }
        }
    }
}
