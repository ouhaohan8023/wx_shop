<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WxShopUser */

$this->title = 'Create Wx Shop User';
$this->params['breadcrumbs'][] = ['label' => 'Wx Shop Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wx-shop-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
