<?php
/**
 * User: noutsasha
 * Date: 06.08.2017
 * Time: 16:32
 */
/* @var $blogs \common\models\Blog; */
use yii\widgets\ListView;
use yii\widgets\ActiveForm;

$blogs = $dataProvider->getModels();

?>


<div class="body-content">


    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_all',
        'layout' => "{summary}\n{sorter}\n{items}\n{pager}",
        'sorter' => [
            'class' => 'rsr\yii2\ButtonDropdownSorter',

            'label' => 'Сортировка',
            'options' => [
                'id' => 'divdsfsf',
                'class' => 'btn btn-success',

            ],
           
        ],
        'options' => [
            'tag' => 'div',
            'class' => 'list-wrapper',
            'id' => 'list-wrapper',
        ],

        'pager' => [

            'firstPageLabel' => 'первый',
            'lastPageLabel' => 'последний',
            'nextPageLabel' => 'следующий',
            'prevPageLabel' => 'предыдущий',
            'maxButtonCount' => 3,
        ],


    ]); ?>

</div>
