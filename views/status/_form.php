<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Status */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'permission')->dropDownList($model->getPermissions(),['prompt'=>'- 选择权限 -']); ?>

<!--    --><?php //echo $form->field($model, 'permission')->dropDownList(['10' => '不公开', '20' => '公开'],['prompt'=>'- 选择权限 -']); ?>

<!--    --><?//= $form->field($model, 'permission')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '发表' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
