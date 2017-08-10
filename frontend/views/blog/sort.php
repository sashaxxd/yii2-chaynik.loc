<?php

// Отображение ссылок на различные действия сортировок
echo $sort->link('title') . ' | ' . $sort->link('text');

foreach ($models as $model) {
     echo '<br>';
    echo $model->title;
    echo '<br>';
    echo '<br>';
    echo $model->text;
    echo '<br>';
}
