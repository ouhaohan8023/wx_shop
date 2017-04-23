<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wxshop */

$this->title = 'Create Wxshop';
$this->params['breadcrumbs'][] = ['label' => 'Wxshops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wxshop-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
