<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WxShopUser */

$this->title = $model->u_id;
$this->params['breadcrumbs'][] = ['label' => 'Wx Shop Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wx-shop-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->u_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->u_id], [
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
            'u_id',
            'u_openid',
            'u_wx_name',
            'u_wx_phone',
            'u_shop_name',
            'u_birthday',
            'u_login_times:datetime',
            'u_able_money',
            'u_able_points',
        ],
    ]) ?>

</div>
