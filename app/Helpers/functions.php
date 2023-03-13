<?php

if (!function_exists('array_column_ext')){
    function array_column_ext($array, $column_key, $index_key = null){
        $result = array();
        foreach ($array as $subarray=>$value){
            if (array_key_exists($column_key,$value)){$val = $array[$subarray][$column_key];}
            else if ($column_key === null){$val = $value;}
            else {continue;}

            if ($index_key === null){ $result[]=$val; }
            elseif ($index_key == -1 || array_key_exists($index_key, $value)){
                $result[($index_key == -1)?$subarray:$array[$subarray][$index_key]] = $val;
            }
        }
        return $result;
    }
}
