<?php defined('SYSPATH') or die('No direct script access.');

/*** Ajax запросы ***/
Route::set('ajax', 'admin/ajax/(<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'directory' => 'ajax'
    ));

Route::set('admin', 'admin(/<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'controller' => 'dashboard',
        'action' => 'index'
    ));
