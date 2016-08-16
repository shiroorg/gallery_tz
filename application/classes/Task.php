<?php defined('SYSPATH') or die('No direct script access.');

class Task
{
    static function create($task_name, $params = [])
    {
        exec('php ' . "index.php --task={$task_name} " . self::params($params) . ' > /dev/null &');
    }

    static function params(array $arr_params)
    {
        $str_params = '';

        if(count($arr_params) > 0)
        {
            foreach($arr_params as $key => $value)
            {
                if(strlen($value) > 0)
                    $str_params .= "--{$key}='{$value}' ";
            }
        }

        return $str_params;
    }
}