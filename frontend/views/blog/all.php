<?php
/**
 * User: noutsasha
 * Date: 06.08.2017
 * Time: 16:32
 */
/* @var $blogs \common\models\Blog; */
?>

<div class="body-content">

    <div class="row">
        <?php foreach($blogs as $blog):?>
            <div class="col-lg-4">
                <?php ?>
                <h2><?= $blog->title ?></h2>

                <p><?= $blog->text ?></p>
                 <?= \yii\helpers\Html::a('Подробнее &raquo;', ['blog/one', 'url' => $blog->url],['class' => 'btn btn-default']);?>
            </div>
        <?php endforeach; ?>
    </div>

</div>
