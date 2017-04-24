<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WxShopUser */

$this->title = 'Update Wx Shop User: ' . $model->u_id;
$this->params['breadcrumbs'][] = ['label' => 'Wx Shop Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->u_id, 'url' => ['view', 'id' => $model->u_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wx-shop-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
