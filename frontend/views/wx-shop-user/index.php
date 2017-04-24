<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WxShopUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wx Shop Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wx-shop-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wx Shop User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'u_id',
            'u_openid',
            'u_wx_name',
            'u_wx_phone',
            'u_shop_name',
            // 'u_birthday',
            // 'u_login_times:datetime',
            // 'u_able_money',
            // 'u_able_points',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
