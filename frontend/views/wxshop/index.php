<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WxshopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '商品分类';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .fff{margin-left: 0;margin-right: 0}
    .ppp{padding-left: 0;padding-right: 0}
    .ooo{border: #c8c9b1 solid 1px;height: 100%}
    .qwe{}
</style>
<div class="wxshop-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row fff">
        <div class="col-xs-3 ppp">
            <div id="btn" class="btn-group-vertical" role="group" aria-label="Vertical button group">
                <?php for($i=0;$i<$num;$i++){
//                    echo '<button value="btn_0'.$i.'" type="button" class="btn btn-default">'.$data[$i]['l_name'].'</button>';
                    echo '<input id='.$data[$i]['l_id'].' value='.$data[$i]['l_name'].' type="button" class="btn btn-default"/>';

                }?>
            </div>
        </div>
        <div class="col-xs-9 ppp ooo">
            <div class="row fff qwe">
                <?php
                    for($i=0;$i<$mnum;$i++){
                        echo '<div class="col-xs-6 ppp" style="padding: 1px;border:#F8F8FF solid 1px"><a href="sec?id='.$mdata[$i]["l_2_id"].'"><img src="'.$mdata[$i]["l_2_src"].'" class="img-responsive" style="padding:1px;border:#FFFAF0 solid 1px"><div style="text-align: center">'.$mdata[$i]["l_2_name"].'</div></a></div>';
                    }
                    ?>

            </div>
        </div>

    </div>

    <?php
    $this->registerJsFile("/wx_shop/frontend/web/js/btnclick.js", ["depends" => [\yii\web\JqueryAsset::className()]]);

    ?>

</div>
