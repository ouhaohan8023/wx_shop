<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WxLevel2 */

$this->title = $model->l_2_id;
$this->params['breadcrumbs'][] = ['label' => 'Wx Level2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wx-level2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->l_2_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->l_2_id], [
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
            'l_2_id',
            'l_2_name',
            'l_2_src',
        ],
    ]) ?>

</div>
