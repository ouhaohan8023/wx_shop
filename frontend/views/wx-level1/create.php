<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\WxLevel1 */

$this->title = 'Create Wx Level1';
$this->params['breadcrumbs'][] = ['label' => 'Wx Level1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wx-level1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
