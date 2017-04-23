<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Wxshop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wxshop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 's_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_price_d')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_stock')->textInput() ?>

    <?= $form->field($model, 's_format')->textInput() ?>

    <?= $form->field($model, 's_f_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_d_txt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_d_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_1_level')->textInput() ?>

    <?= $form->field($model, 's_2_level')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
