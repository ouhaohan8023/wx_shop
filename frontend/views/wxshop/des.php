<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wxshop */

?>
<style>
    .fff{margin-left: 0;margin-right: 0}    /*  row     */
    .ppp{padding-left: 0;padding-right: 0}  /*  col-xs-12     */
    .ooo{border: #c8c9b1 solid 1px;height: 100%}
    .txt{font-size: 15px;padding-left: 3px}     /*  宝贝标题    */
    .txt2{font-size: 13px;color: #9fa08d}
    .foot{text-align: center}
    .foot1{line-height: 50px;font-size: 16px;color: #ffffff;}
</style>
<div class="wxshop-view">
    <div class="row fff">
        <div class="col-xs-12 ppp">
            <img class="img-responsive" src="<?php echo $query['s_f_pic']?>" >
        </div>
    </div>

    <div class="row fff">
        <div class="col-xs-12 txt ppp">
            <?php echo $query['s_name'];?>
        </div>
        <div class="col-xs-12">
            <span class="glyphicon glyphicon-yen" aria-hidden="true" style="color: #ff4c20"></span>
            <?php if(!empty($query['s_price_d'])){
                echo '<strong class="" style="font-size: 19px;color: #ff4c20"><em>'.$query['s_price_d'].'</em></strong>';
                echo '&nbsp;&nbsp;';
                echo '<s>'.$query['s_price'].'</s>';
            }else{
                echo '<strong class="" style="font-size: 19px;color: #ff4c20"><em>'.$query['s_price'].'</em></strong>';
            }?>
        </div>
        <div class="col-xs-4 txt2">
            快递费: <?php if($query['s_kd']==0){
                echo '免邮';
            }else{
                echo $query['s_kd'].' 元';
            }
            ;?>
        </div>
        <div class="col-xs-4 txt2">
            月销量: <?php echo $query['s_num'].' 笔'?>
        </div>
        <div class="col-xs-4 txt2">
            <?php echo $query['s_from'];?>
        </div>
        <div class="col-xs-12 txt2" style="background-color: #f5f8f2">
            卖家承诺24小时内发货
        </div>

        <div>
            <?php for($i=0;$i<$num;$i++){
                echo '<img class="img-responsive" src="'.$dis[$i].'">';
            }?>

        </div>
    </div>

    <footer class="navbar navbar-default navbar-fixed-bottom fff">

        <div class="col-xs-3 ppp foot" style="color: #9fa08d">
            <div class="col-xs-12"><span style="font-size: 24px" class="glyphicon glyphicon-star-empty"></span></div>
            <div class="col-xs-12">收藏&nbsp;</div>
        </div>
        <div id="foot1" class="col-xs-4 ppp foot foot1" style="background-color: #ffa733" data-toggle="modal" data-target="#myModal">
            加入购物车
        </div>
        <div id="foot2" class="col-xs-5 ppp foot foot1" style="background-color: #ff4c20" data-toggle="modal" data-target="#myModal">
            立即购买
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top: 50%">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">数量规格</h4>
                </div>
                <div class="modal-body">
                        <?php echo '<form action="https://open.weixin.qq.com/connect/oauth2/authorize?appid='.Yii::$app->params['Appid'].'&redirect_uri='.Yii::$app->params['redirect_url'].$query['s_id'].'&response_type=
code&scope=snsapi_base&state=STATE#wechat_redirect" method="post">';?>
<!--                    <form action="" method="get">-->
                        <div class="row" style="line-height: 64px">
                            <input name="s_id" id="s_id" value="<?php echo $query['s_id']?>" hidden="hidden"/>
                            <div class="col-xs-3" style="font-size: 18px">数量: </div>
                            <div class="col-xs-3 ppp" style="text-align: right">
                                <span class="input-group-btn">
                                <button class="btn btn-default less" type="button" style="background-color: #cccccc"><span class="glyphicon glyphicon-minus"></span></button>
                            </span>
                            </div>
                            <div class="col-xs-3 ppp" style="margin-top: 15px">
                                <input name="input" id="input" type="text" class="form-control input" value="1" style="text-align: center;border: 0;"/>
                            </div>
                            <div class="col-xs-3 ppp">
                                <span class="input-group-btn">
                                <button class="btn btn-default more" type="button" style="background-color: #cccccc"><span class="glyphicon glyphicon-plus"></span></button>
                            </span>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button id="sub" type="submit" class="btn btn-primary">提交</button>
                </div>
                </form>

            </div>
        </div>
    </div>



    <?php
    $this->registerJsFile("/wx_shop/frontend/web/js/foot.js", ["depends" => [\yii\web\JqueryAsset::className()]]);

    ?>

</div>
