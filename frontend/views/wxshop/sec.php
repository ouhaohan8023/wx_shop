<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wxshop */

$this->title = $model->s_id;
$this->params['breadcrumbs'][] = ['label' => 'Wxshops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wxshop-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->s_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->s_id], [
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
            's_id',
            's_name',
            's_price',
            's_price_d',
            's_stock',
            's_format',
            's_f_pic',
            's_d_txt',
            's_d_pic',
            's_1_level',
            's_2_level',
        ],
    ]) ?>

</div>
