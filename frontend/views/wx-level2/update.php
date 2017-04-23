<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WxLevel2 */

$this->title = 'Update Wx Level2: ' . $model->l_2_id;
$this->params['breadcrumbs'][] = ['label' => 'Wx Level2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->l_2_id, 'url' => ['view', 'id' => $model->l_2_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wx-level2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
