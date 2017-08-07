<?php

?>
<div class="col-lg-4">

    <h2><?= $model->title ?><span class="badge"><?= $model->author->email ?></span></h2>

    <p><?= $model->text ?></p>
    <?= \yii\helpers\Html::a('Подробнее &raquo;', ['blog/one', 'url' => $model->url], ['class' => 'btn btn-default']); ?>
</div>

