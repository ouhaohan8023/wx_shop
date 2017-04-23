<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WxLevel1 */

$this->title = 'Update Wx Level1: ' . $model->l_id;
$this->params['breadcrumbs'][] = ['label' => 'Wx Level1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->l_id, 'url' => ['view', 'id' => $model->l_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wx-level1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
