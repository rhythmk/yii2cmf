<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '单页管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <p>
        <?= Html::a('创建单页', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </p>
    <div class="box box-primary">
        <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'id',
            [
                'attribute' => 'use_layout',
                'value' => function ($model) {
                    $arr = ['不使用', '使用'];
                    return $arr[$model->use_layout];
                },
            ],
            'title',
            'slug',

            ['class' => 'backend\widgets\grid\ActionColumn'],
        ],
    ]); ?>
    </div></div>
</div>
