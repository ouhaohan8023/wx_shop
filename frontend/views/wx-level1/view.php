<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\WxLevel1 */

$this->title = $model->l_id;
$this->params['breadcrumbs'][] = ['label' => 'Wx Level1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wx-level1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->l_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->l_id], [
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
            'l_id',
            'l_name',
            'l_src',
        ],
    ]) ?>

</div>
