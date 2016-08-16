<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'default' => array
    (
        'type' => 'MySQLi',
        'connection' => array(
            'hostname'   => 'localhost',
            'database'   => 'tz_gallery',
            'username'   => 'root',
            'password'   => 'root',
        ),
        'table_prefix' => false,
        'charset'      => 'utf8',
        #'caching'      => true,
        #'profiling'    => true,
    ),
    'migration' => array
    (
        'type' => 'MySQL',
        'connection' => array(
            'hostname'   => 'localhost',
            'database'   => 'tz_gallery',
            'username'   => 'root',
            'password'   => 'root',
        ),
        'table_prefix' => false,
        'charset'      => 'utf8',
        #'caching'      => true,
        #'profiling'    => true,
    ),
);
