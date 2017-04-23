<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WxLevel2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wx Level2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wx-level2-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wx Level2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'l_2_id',
            'l_2_name',
            'l_2_src',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
