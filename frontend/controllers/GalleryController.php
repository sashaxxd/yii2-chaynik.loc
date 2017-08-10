<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 10.08.2017
 * Time: 18:54
 */

namespace frontend\controllers;



use common\models\GalleryImage;
use zxbodya\yii2\galleryManager\GalleryManagerAction;

class GalleryController extends \yii\web\Controller
{

    public function actions()
    {
        return [
            'galleryApi' => [
                'class' => GalleryManagerAction::className(),
                // mappings between type names and model classes (should be the same as in behaviour)
                'types' => [
                    'gallery' => GalleryImage::className()
                ]
            ],
        ];
    }

    public function actionIndex()
    {
        $model = GalleryImage::find()->all();
        return $this->render('index', [
            'model' => $model[0]
        ]);
    }

//    public function actiongalleryApi()
//    {
//        echo "OK";
//    }

}
