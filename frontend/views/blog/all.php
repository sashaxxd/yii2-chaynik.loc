<?php
/**
 * User: noutsasha
 * Date: 06.08.2017
 * Time: 16:32
 */
/* @var $blogs \common\models\Blog; */
use yii\widgets\ListView;
$blogs = $dataProvider->getModels();
?>

<div class="body-content">


    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_all',
    ]); ?>

</div>
