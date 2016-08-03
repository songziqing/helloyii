<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Status */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '说说', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'message:ntext',
            //'permission',
            [
                'label' => '权限',
                'value' => $model->getPermissionsLabel($model->permission),
            ],
            //'created_at:datetime',
            [
                'label' => '发表时间',
                'value' => date("Y-m-d H:i",$model->created_at)
            ],
            //'updated_at:datetime',
            [
                'label' => '发表时间',
                'value' => date("Y-m-d H:i",$model->updated_at)
            ],
        ],
    ]) ?>

</div>
