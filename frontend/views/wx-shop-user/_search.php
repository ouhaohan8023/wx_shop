<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WxShopUserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wx-shop-user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'u_id') ?>

    <?= $form->field($model, 'u_openid') ?>

    <?= $form->field($model, 'u_wx_name') ?>

    <?= $form->field($model, 'u_wx_phone') ?>

    <?= $form->field($model, 'u_shop_name') ?>

    <?php // echo $form->field($model, 'u_birthday') ?>

    <?php // echo $form->field($model, 'u_login_times') ?>

    <?php // echo $form->field($model, 'u_able_money') ?>

    <?php // echo $form->field($model, 'u_able_points') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
