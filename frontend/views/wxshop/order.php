<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wxshop */
var_dump($user);
var_dump($shop);
die;
?>
<div class="row" style="margin-top: 5px;border-bottom: #bebec5 1px solid;height: 80px;line-height: 80px;">
			<div class="col-xs-2" style=" text-align: center">
				<span class=" icon-map-marker icon-2x" ></span>
			</div>
			<div class="col-xs-9">
				<address>
					<strong>收件人:<?php echo $search_address_data_assoc['a_name'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $search_address_data_assoc['a_phone']?><br>
收货地址:<?php echo $search_address_data_assoc['a_address'];?><br>
</strong>
</address>
</div>
<div class="col-xs-1" style="top: 30px;color:#cccccc;">
    <span class="icon-chevron-right" style="position:absolute;"></span>
</div>
</div>

<div style="height: 3px;background-color: #cccccc"></div>

<div class="row">
    <ul class="list-group">
        <li class="list-group-item">
            <span></span>
            <div>小逗比的官方旗舰店</div>
        </li>
        <li class="list-group-item" style="height: 90px;padding: 4px 0">
            <div class="col-xs-4" style="width: 30%">
                <img class="img-responsive" src="<?php echo $search_item_data_assoc['i_f_pic'];?>" style="height: 80px"/>
            </div>
            <div class="col-xs-8" style="padding-left: 0;font-size: 13px">
                <div class="col-xs-12 padding0"><?php echo $search_item_data_assoc['i_name'];?></div>
                <div class="col-xs-12 padding0" style="color: #cccccc">规格: <?php echo $search_item_data_assoc['i_format'];?></div>
                <div class="col-xs-11 padding0" style="color: #ff7542">¥ <?php echo $search_item_data_assoc['i_price_low'];?></div>
                <div class="col-xs-1 padding0">X<wx id="xinput"></wx></div>

            </div>
        </li>
        <li class="list-group-item">
            <div class="row" >
                <div class="col-xs-3 padding0" style="line-height: 34px;color: #777777">购买数量</div>
                <div class="col-xs-3 col-xs-offset-5 padding0">
                    <div class="input-group" style="width: 120px">
						 <span class="input-group-btn">
							 <button class="btn btn-default less" type="button" style="background-color: #cccccc"><span class="glyphicon glyphicon-minus"></span></button>
						 </span>
                        <input id="input" type="text" class="form-control input" value="<?php echo $input;?>" style="text-align: center;border: 0"/>
                        <input id="price" value="<?php echo $search_item_data_assoc['i_price_low'];?>" hidden="hidden"/>
                        <input id="o_openid" value="<?php echo $openid;?>" hidden="hidden"/>
                        <input id="o_i_id" value="<?php echo $item_id;?>" hidden="hidden"/>
                        <input id="o_a_id" value="<?php echo $search_address_data_assoc['a_id'];?>" hidden="hidden"/>
                        <input id="o_order_price" value="<?php echo $search_item_data_assoc['i_price_low'];?>" hidden="hidden"/>


						 <span class="input-group-btn">
							 <button class="btn btn-default more" type="button" style="background-color: #cccccc"><span class="glyphicon glyphicon-plus"></span></button>
						 </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div>
        </li>

        <li class="list-group-item" style="height: 42px">
            <form>
                <div class="form-group">
                    <div class="row express" style="color: #777777">
                        <div class="col-xs-3 padding0">配送方式</div>
                        <div class="dropdown col-xs-6 col-xs-offset-2 padding0">
                            <select class="form-control" style="box-shadow: inset 0 0 0;border: 0;height: 20px;padding: 0;color: #777777">
                                <option value="0" id="0">快递 免邮</option>
                                <option value="1" id="1">线下 交易</option>
                            </select>
                        </div>
                        <div class="col-xs-1 padding0" >
                            <span class="icon-chevron-right" style="color: #cccccc;line-height: 20px"></span>
                        </div>
                    </div>
                </div>
            </form>
        </li>

        <li class="list-group-item" style="height: 42px">
            <form>
                <div class="form-group">
                    <div class="row express" style="color: #777777">
                        <div class="col-xs-3 padding0">运费险</div>
                        <div class="dropdown col-xs-6 col-xs-offset-2 padding0">
                            <select class="form-control" style="box-shadow: inset 0 0 0;border: 0;height: 20px;padding: 0;color: #777777">
                                <option>卖家提供免费运费险</option>
                            </select>
                        </div>
                        <div class="col-xs-1 padding0" >
                            <span class="icon-chevron-right" style="color: #cccccc;line-height: 20px"></span>
                        </div>
                    </div>
                </div>
            </form>
        </li>

        <li class="list-group-item">
            <div class="row" style="color: #777777">
                <div class="col-xs-3 padding0">买家留言:</div>
                <input class="col-xs-9 padding0" placeholder="选填对本次交易的说明" style="height: 20px"/>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row" style="font-size: 13px">
                <div class="col-xs-6 col-xs-offset-6 padding0">共<a>1</a>件商品  小计: <wx style="color: #ff7542">¥ <wx id="totalprice"></wx></wx>
                </div>
            </div>
        </li>
    </ul>
</div>

<nav class="navbar navbar-default navbar-fixed-bottom" style="height: 50px">
    <div class="row" style="line-height: 50px">
        <div class="col-xs-4 col-xs-offset-5">合计: <wx id="beforesubmit"></wx></div>
        <button id="suborder" class="col-xs-3" style="padding-top: 0;padding-bottom: 0;border-width: 0;background-color: #ff5923">提交订单</button>
    </div>
</nav>
</div>

<script src="../js/js.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--<script src="../js/moreorless.js"></script>-->

<script>
    //		alert(screen.width);
    $('#shop_brand').css('width',screen.width-130);
    //	计算总价
    var price = $('#price').val();
    var input = $('.input').val();
    //收集元素,拼接链接
    var o_openid = $('#o_openid').val();
    var o_i_id = $('#o_i_id').val();
    var o_a_id = $('#o_a_id').val();
    var o_order_price = $('#o_order_price').val();

    input = parseInt(input);

    if(input == 0){
        $('.less').attr('disabled',true);
    }

    //		加一减一
    $('.less').click(function(){
        if(input == 0){
            $('.less').attr('disabled',true);
        }else{
            input = input - 1;
            $('.input').val(input);
            $('#xinput').html(input);
            $('#totalprice').html((price*input).toFixed(2));
            $('#beforesubmit').html((price*input).toFixed(2));

        }
    });

    $('.more').click(function(){
        if(input != 0){
            $('.less').removeAttr('disabled');
        }
        input = input + 1;
        $('.input').val(input);
        $('#xinput').html(input);
        $('#totalprice').html((price*input).toFixed(2));
        $('#beforesubmit').html((price*input).toFixed(2));
    });

    //总计,合计
    $('#xinput').html(input);
    $('#totalprice').html((price*input).toFixed(2));
    $('#beforesubmit').html((price*input).toFixed(2));

    //生成链接
    $('#suborder').click(function(){
//			alert(111);
        $('#suborder').attr('disabled',true);
        if($('#suborder').attr('disabled') == 'disabled'){
            window.location.href="order/order.php?o_openid="+o_openid+"&o_i_id="+o_i_id+"&o_a_id="+o_a_id+"&o_order_price="+o_order_price+"&o_num="+input+"";
        }
    });



</script>

</body>