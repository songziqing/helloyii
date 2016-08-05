<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Status;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '类似说说';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建我的说说', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'message',
            //'permission',
//            [
//                'attribute'=>'permission',
//                'value'=>
//                    function($model){
//                        return Status::getPermissionsLabel($model->permission);}
//            ],
            //'created_at:datetime',
//            [
//                'attribute' => 'created_at',
//                'format' => ['date', 'php:Y-m-d H:i']
//            ],
            //'updated_at:datetime',
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:Y-m-d H:i']
            ],
            //'author_id',
           // 'user.email',
            'user.username',
//            [
//                'attribute'=>'author_id',
//                'value'=>
//                    function($model){
//                        return Status::getStatusAuthorName($model->author_id);}
//            ],

//            [
//                'class' => 'yii\grid\ActionColumn',
//            ],
        ],
    ]); ?>
</div>
