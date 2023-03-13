<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Translate;
class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
      'type',
      'parent_id'
    ];


    public function translates()
    {
        return $this->hasMany('App\Models\Translate', 'object_id', 'id')->where(['object' => 'category'])->where(['languages' => $this->lang]);
    }

    public function translatesCheck()
    {
        return $this->hasMany('App\Models\Translate', 'object_id', 'id')->select(['id','object_type','object_id','languages'])->where(['object' => 'category']);
    }

    public function getTitleAttribute()
    {
      return $this->translates->firstWhere('object_key','=','title')?$this->translates->firstWhere('object_key','=','title')->object_value:false;
    }
    public function setTitleAttribute($value)
    {
        $this->title = $value;
    }

    public function getLangAttribute()
    {
        return (isset($_GET['lang']) && $_GET['lang'])?$_GET['lang']:\App::getLocale();
    }

    public function setLangAttribute($value)
    {
        $this->lang = (isset($_GET['lang']) && $_GET['lang'])?$_GET['lang']:$value;
    }

    public function save(array $options = [])
    {
         parent::save($options);
         $this->saveTranslations();
         return true;
    }

    public function saveTranslations()
    {
        Translate::saveTranslations($this, 'title',$this->title,'category',$this->lang);
    }

    public function getLangsCheckAttribute()
    {
        $languages = \Config::get('laravellocalization.supportedLocales');
        if ($this->translatesCheck){
            foreach ($this->translatesCheck as $translate)
            {
                if (isset($languages[$translate->languages]))
                {
                    $languages[$translate->languages]['exists'] = true;
                }
            }
        }
        return $languages;
    }

}
