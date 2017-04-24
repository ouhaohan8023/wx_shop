<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wxshop */

$this->params['breadcrumbs'][] = ['label' => '商品分类', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .fff{margin-left: 0;margin-right: 0}
    .ppp{padding-left: 0;padding-right: 0}
    .ooo{border: #c8c9b1 solid 1px;height: 100%}
</style>
<div class="wxshop-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row fff">
        <div class="col-xs-3 ppp">
            <div id="btn" class="btn-group-vertical" role="group" aria-label="Vertical button group">
                <?php for($i=0;$i<$num_sec;$i++){
//                    echo '<button value="btn_0'.$i.'" type="button" class="btn btn-default">'.$data[$i]['l_name'].'</button>';
                    echo '<input id='.$data_sec[$i]['l_2_id'].' value='.$data_sec[$i]['l_2_name'].' type="button" class="btn btn-default"/>';

                }?>
            </div>
        </div>
        <div class="col-xs-9 ppp ooo">
            <div class="row fff qwe">
                <?php
                for($i=0;$i<$num;$i++){
                    echo '<div class="col-xs-6 ppp" style="padding: 1px;border:#F8F8FF solid 1px"><a href="des?id='.$data[$i]["s_id"].'"><img src="'.$data[$i]["s_f_pic"].'" class="img-responsive" style="padding:1px;border:#FFFAF0 solid 1px"><div style="text-align: center">'.$data[$i]["s_name"].'</div></a></div>';
                }
                ?>

            </div>
        </div>


    </div>




    <?php
    $this->registerJsFile("/wx_shop/frontend/web/js/btnclick2.js", ["depends" => [\yii\web\JqueryAsset::className()]]);

    ?>

</div>
