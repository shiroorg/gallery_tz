<?php defined('SYSPATH') OR die('No direct script access.');

class Arr extends Kohana_Arr {


    /**
     * Remove array of elements whose value is NULL
     *
     * @param   array   $array      array to search
     * @return  mixed
     */
    static function only_filling(array $array)
    {
        return array_filter($array, function($value) {
            return $value !== NULL;
        });
    }

}
