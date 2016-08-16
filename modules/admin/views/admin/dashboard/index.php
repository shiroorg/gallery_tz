<?php defined('SYSPATH') or die('No direct script access.');?>


<div class="col-xs-12">
    <h3>Управление баннерами</h3>
    <form action="#" enctype="multipart/form-data" method="POST" class="col-xs-6">
        <div class="form-group">
            <label for="exampleInputName">Название</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Название">
        </div>
        <div class="form-group">
            <label for="exampleInputUrl">Ссылка</label>
            <input type="text" name="url" class="form-control" id="exampleInputUrl" placeholder="Укажите ссылку, куда будут уходить пользователи по клику">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Выберите баннер</label>
            <input type="file" name="img" id="exampleInputFile">
            <p class="help-block">Баннер будет загружен на сервер.</p>
        </div>
        <button type="submit" class="btn btn-default">Загрузить</button>
    </form>
</div>

<div class="col-xs-12">
    <br>
    <hr>
    <div class="col-xs-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <td>ID</td>
                <td>Название</td>
                <td>Баннер</td>
                <td>Ссылка</td>
                <td>Просмотров</td>
                <td>Уникальных</td>
                <td>Кликов</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($gallery as $item):?>
                <tr>
                    <td><?=$item->id?></td>
                    <td><?=$item->name?></td>
                    <td><img src="/media/img/small/<?=$item->img?>" alt=""></td>
                    <td><?=$item->url?></td>
                    <td><?=$item->view?></td>
                    <td><?=$item->unique?></td>
                    <td><?=$item->click?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>