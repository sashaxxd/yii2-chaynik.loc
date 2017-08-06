<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать пост', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'text:ntext',
            'url:url',
            ['attribute' => 'status_id', 'filter' => ['off', 'on'], 'value' => function($model){
                if($model->status_id == 1){
                    $status = '<span class="text-success">Вкл</span>';
                }
                else{
                    $status = '<span class="text-danger">Выкл</span>';
                }
                       return $status;

            },
                'format' => 'html',
            ],
             'sort',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
