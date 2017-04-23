<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WxLevel2 */

$this->title = 'Create Wx Level2';
$this->params['breadcrumbs'][] = ['label' => 'Wx Level2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wx-level2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
