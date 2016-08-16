<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= ($title) ? $title : "Admin Template" ?></title>

    <link href="/media/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/media/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <? if (isset($additional_style)): ?>
        <? foreach ($additional_style as $style): ?>
            <?= HTML::style($style) ?>
        <? endforeach ?>
    <? endif ?>
</head>

<body id="main">
<?= $content ?>
<footer>
    <div class="pull-right">
        Develop by <a href="http://shiroorg.ru/">ShiRO Kred</a>
    </div>
    <div class="clearfix"></div>
</footer>


<script src="/media/admin/app/app.js"></script>
<script src="/media/frontend/js/libs/underscore/underscore-min.js" type="text/javascript"></script>
<script src="/media/frontend/js/libs/backbone/backbone.min.js" type="text/javascript"></script>

<? if (isset($additional_script)): ?>
    <? foreach ($additional_script as $script): ?>
        <?= HTML::script($script . '?v=' . $_SERVER['VERSION']) ?>
    <? endforeach ?>
<? endif ?>

</body>
</html>
