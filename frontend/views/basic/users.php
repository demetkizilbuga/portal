<?php

echo \yii\grid\GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        'id',
        'email',
        'username',
        'created_at',
        'updated_at'
    ]
]);