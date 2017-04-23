<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style>
    .col-xs-3 {padding:0}
    .shop_pad{padding-left: 1px;padding-right: 1px}
    .shop1_1{border: solid #adadad 1px}
    .fff{margin-bottom: 3px}
</style>
<!--搜索      start-->
<div class="row fff">
    <div class="col-xs-12">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="搜索">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">搜索</button>
          </span>
        </div><!-- /input-group -->
    </div>
</div>
<!--搜索      end-->
<!--轮播图         start-->
<div id="ddd" class="bs-example" data-example-id="carousel-with-captions" >
    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-captions" data-slide-to="2" class="active"></li>
            <li data-target="#carousel-example-captions" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item">
                <img data-src="holder.js/900x500/auto/#777:#777" alt="900x500" src="../web/img/t_01.jpeg" data-holder-rendered="true">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img data-src="holder.js/900x500/auto/#666:#666" alt="900x500" src="../web/img/t_02.jpeg" data-holder-rendered="true">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item active">
                <img data-src="holder.js/900x500/auto/#555:#555" alt="900x500" src="../web/img/t_03.jpeg" data-holder-rendered="true">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img data-src="holder.js/900x500/auto/#444:#444" alt="900x500" src="../web/img/t_04.jpeg" data-holder-rendered="true">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--轮播图         end-->

<div class="site-index">
<!--    icon        start-->
    <div>
        <div class="col-xs-3">
            <a href="wxshop/index"><img src="../web/img/f_1.jpeg" class="img-responsive"></a>
        </div>
        <div class="col-xs-3">
            <a href=""><img src="../web/img/f_2.jpeg" class="img-responsive"></a>
        </div>
        <div class="col-xs-3">
            <a href=""><img src="../web/img/f_3.jpeg" class="img-responsive"></a>
        </div>
        <div class="col-xs-3">
            <a href=""><img src="../web/img/f_4.jpeg" class="img-responsive"></a>
        </div>
    </div>
<!--    icon        end-->
<!--banner1     start-->
    <div class="row fff" style="margin-bottom: 3px">
        <div class="col-xs-12">
            <img src="img/e_1.jpeg" class="img-responsive">
        </div>
    </div>
<!--banner1     end-->
<!--shop1       start-->
    <div class="row shop1 fff">
        <div class="col-xs-12">
            <div class="col-xs-3 shop_pad">
                <img src="img/food1.jpg" class="img-responsive shop1_1">
            </div>
            <div class="col-xs-3 shop_pad">
                <img src="img/food2.jpg" class="img-responsive shop1_1">
            </div>
            <div class="col-xs-3 shop_pad">
                <img src="img/food4.jpg" class="img-responsive shop1_1">
            </div>
            <div class="col-xs-3 shop_pad">
                <img src="img/food3.jpg" class="img-responsive shop1_1">
            </div>
        </div>
    </div>
<!--shop1       end    -->
    <!--banner2     start-->
    <div class="row fff">
        <div class="col-xs-12">
            <img src="img/e_2.jpeg" class="img-responsive">
        </div>
    </div>
    <!--banner2     end-->
    <!--shop2       start-->
    <div class="row shop1 fff">
        <div class="col-xs-12">
            <div class="col-xs-3 shop_pad">
                <img src="img/c_1.jpg" class="img-responsive shop1_1">
            </div>
            <div class="col-xs-3 shop_pad">
                <img src="img/c_2.jpg" class="img-responsive shop1_1">
            </div>
            <div class="col-xs-3 shop_pad">
                <img src="img/c_3.jpg" class="img-responsive shop1_1">
            </div>
            <div class="col-xs-3 shop_pad">
                <img src="img/c_4.jpg" class="img-responsive shop1_1">
            </div>
        </div>
    </div>
    <!--shop2       end    -->
</div>
