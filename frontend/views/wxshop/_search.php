<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WxshopSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wxshop-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 's_id') ?>

    <?= $form->field($model, 's_name') ?>

    <?= $form->field($model, 's_price') ?>

    <?= $form->field($model, 's_price_d') ?>

    <?= $form->field($model, 's_stock') ?>

    <?php // echo $form->field($model, 's_format') ?>

    <?php // echo $form->field($model, 's_f_pic') ?>

    <?php // echo $form->field($model, 's_d_txt') ?>

    <?php // echo $form->field($model, 's_d_pic') ?>

    <?php // echo $form->field($model, 's_1_level') ?>

    <?php // echo $form->field($model, 's_2_level') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
