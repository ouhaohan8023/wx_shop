<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WxLevel2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wx-level2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'l_2_id')->textInput() ?>

    <?= $form->field($model, 'l_2_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'l_2_src')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
