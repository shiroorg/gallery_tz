<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=isset($description) ? $description : ''?>">
    <title><?=isset($title) ? $title : ''?></title>
    <link href="/media/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,300' rel='stylesheet' type='text/css'>
    <link href="/media/frontend/build/app.min.css?v=<?=$_SERVER['VERSION']?>" rel="stylesheet">
</head>
<body>
<?=isset($content) ? $content : ''?>

<script src="/media/frontend/js/libs/jquery/jquery-min.js"></script>
<script src="/media/libs/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="/media/frontend/js/libs/underscore/underscore-min.js" type="text/javascript"></script>
<script src="/media/frontend/js/libs/backbone/backbone.min.js" type="text/javascript"></script>
<script src="/media/frontend/app/app.js?v=<?=$_SERVER['VERSION']?>" type="text/javascript"></script>
<script src="/media/frontend/app/banner.js?v=<?=$_SERVER['VERSION']?>" type="text/javascript"></script>
<? if (isset($additional_script)): ?>
    <? foreach ($additional_script as $script): ?>
        <?=HTML::script($script) ?>
    <? endforeach ?>
<? endif ?>
</body>
</html>
