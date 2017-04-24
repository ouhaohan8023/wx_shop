<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WxShopUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wx-shop-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'u_openid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_wx_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_wx_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_shop_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_birthday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_login_times')->textInput() ?>

    <?= $form->field($model, 'u_able_money')->textInput() ?>

    <?= $form->field($model, 'u_able_points')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
