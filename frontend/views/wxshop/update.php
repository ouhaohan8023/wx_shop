<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wxshop */

$this->title = 'Update Wxshop: ' . $model->s_id;
$this->params['breadcrumbs'][] = ['label' => 'Wxshops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->s_id, 'url' => ['view', 'id' => $model->s_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wxshop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
