<?php
namespace frontend\controllers;

use common\models\Blog;
use common\models\BlogSearch;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\Sort;

class BlogController extends Controller{


    public function actionIndex()
    {



        $blogs = Blog::find()->andWhere(['status_id' => 1])->orderBy('sort');

        $dataProvider = new ActiveDataProvider([
            'query' => $blogs,
            'pagination' => [
                'pageSize' => 2
            ],
            'sort'=>[
                'defaultOrder'=>'id DESC',
                'attributes' =>
                   [
                        'title' => ['title' => SORT_ASC, 'text' => SORT_ASC],
                        'text' => ['text' => SORT_DESC, 'title' => SORT_DESC],

                    ],
            ],
        ]);

        return $this->render('all',
            [
                'dataProvider' => $dataProvider,

            ]
        );
    }
    public function actionOne($url)
    {
        if ( $blog = Blog::find()->andWhere(['url' => $url])->one()){
           return $this->render('one',
            [
                'blog' => $blog,
            ]
        );
        }
      throw new NotFoundHttpException('Нет такой записи');

    }

    public function actionSort()
    {
        $sort = new Sort([
            'attributes' => [
                'text',
                'title' => [
                    'asc' => ['title' => SORT_ASC, 'title' => SORT_ASC],
                    'desc' => ['title' => SORT_DESC, 'title' => SORT_DESC],
                    'default' => SORT_DESC,
                    'label' => 'title',
                ],
            ],
        ]);

        $models = Blog::find()
            ->where(['status_id' => 1])
            ->orderBy($sort->orders)
            ->all();

        return $this->render('sort', [
            'models' => $models,
            'sort' => $sort,
        ]);
    }

}