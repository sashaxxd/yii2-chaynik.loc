<?php
use yii\helpers\Html;
use zxbodya\yii2\galleryManager\GalleryManager;


if ($model->isNewRecord) {
    echo 'Can not upload images for new record';
} else {
    echo GalleryManager::widget(
        [
            'model' => $model,
            'behaviorName' => 'galleryBehavior',
            'apiRoute' => 'gallery/galleryApi'
        ]
    );
}

?>
    <!-- тут массив-->
<?php
foreach($model->getBehavior('galleryBehavior')->getImages() as $image) {
    echo Html::img($image->getUrl('medium'));
}