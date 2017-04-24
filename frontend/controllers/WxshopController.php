<?php

namespace frontend\controllers;

use app\models\WxLevel1;
use app\models\WxLevel1Search;
use app\models\WxLevel2;
use app\models\WxShop;
use app\models\WxShopUser;
use Yii;
use app\models\WxshopSearch;
use yii\helpers\Ouhaohan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WxshopController implements the CRUD actions for Wxshop model.
 */
class WxshopController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Wxshop models.
     * @return mixed
     */
    public function actionIndex()
    {
//        var_dump($_GET);
        header("Content-Type: text/html; charset=UTF-8");
        $open = Ouhaohan::getopenid();//获取到用户的基本信息,下一步存入数据库
        $data1 = (array)json_decode($open);
        $openid = $data1['openid'];
        $access_token = $data1['access_token'];

        $findone = WxShopUser::find()->where(['u_openid'=>$openid])->one();
//        var_dump($findone);
        if(count($findone)==0){//新用户
            $url_user = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
            $userinfo = Ouhaohan::getcurl($url_user);
            $user = (array)json_decode($userinfo);
//            var_dump($user);die;
            $model = new WxShopUser();
            $model->u_openid = $user['openid'];
            $model->u_wx_name = $user['nickname'];
            $model->u_time = date('Y-m-d H:i:s',time());
            $model->save();//未找到用户,新增用户
        }else{
            $findone['u_login_times'] = $findone['u_login_times']+1;
            WxShopUser::updateAll(['u_login_times'=>$findone['u_login_times']],['u_openid'=>$findone['u_openid']]);//记录登录次数
        }


//        $query = WxLevel2::find()->where(['l_2_1'=>1])->all();
//        foreach($query as $key => $value){
//            $data[$key] = $value->attributes;
//        };
//        $data = json_encode($data);
//
//        var_dump($data);die;

        $data = WxLevel1::find()->all();
        foreach($data as $key => $value){
            $data[$key] = $value->attributes;
        };
        $num = count($data);
        $query = WxLevel2::find()->where(['l_2_1'=>1])->all();
        foreach($query as $key => $value){
            $mdata[$key] = $value->attributes;
        };
        $mnum = count($mdata);
//        echo '<pre>';
//        var_dump($data);
        $searchModel = new WxshopSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'data' => $data,//分类
            'num' => $num,//分类数
            'mdata' => $mdata,//默认
            'mnum' => $mnum,

        ]);
    }//一级分类展现

    public function actionData($id){
//        return $id;
        $query = WxLevel2::find()->where(['l_2_1'=>$id])->all();
        foreach($query as $key => $value){
            $data[$key] = $value->attributes;
        };
//        $data = json_encode($query);
        $data = json_encode($data);
        return $data;
    }//一级分类点击ajax返回二级分类的数据

    public function actionSec($id){
        $query = WxShop::find()->where(['s_2_level'=>$id])->all();
        $num = count($query);
        if($num != 0){
            foreach($query as $key => $value){
                $data[$key] = $value->attributes;
            };
//            var_dump($data);die;
        }else{
            $data = NULL;
        }
        $sec = WxLevel2::find()->where(['l_2_1'=>$data[0]['s_1_level']])->all();//如果第二分类相同,那么肯定也都属于同样的第一分类
        $num_sec = count($sec);
        if($num_sec != 0){
            foreach($sec as $key => $value){
                $data_sec[$key] = $value->attributes;
            };
//            var_dump($data);die;
        }else{
            $data_sec = NULL;
        }
        return $this->render('sec',[
            'data' => $data,
            'num' => $num,
            'data_sec' => $data_sec,
            'num_sec' => $num_sec,
        ]);
    }//二级分类展现

    public function actionSdata($id){
        $query = Wxshop::find()->where(['s_2_level'=>$id])->all();
        if(count($query)!=0){
            foreach($query as $key => $value){
                $data[$key] = $value->attributes;
            };
//        $data = json_encode($query);
            $data = json_encode($data);
            return $data;
        }else{
            return '000';
        }

    }//二级分类点击ajax返回商品的数据

    public function actionDes($id){
//        $this->layout = false;
//        Ouhaohan::getopenid();
        $query = Wxshop::find()->where(['s_id'=>$id])->one();
        if(count($query) != 0){
            //        var_dump($query['s_id']);die;
            $dis = explode(',,',$query['s_d_pic']);
            $num = count($dis);
            return $this->render('des', [
              'query' => $query,
              'dis' => $dis,
                'num' => $num,
            ]);
        }else{
            echo '所查询商品不存在';
            die;
        }
    }//商品详情

    public function actionOrder(){
        var_dump($_POST);
        var_dump($_GET);
        die;
        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=".Yii::$app->params['Appid']."&redirect_uri=&response_type=
code&scope=snsapi_base&state=STATE#wechat_redirect ";
        var_dump($_GET);
    }

    /**
     * Displays a single Wxshop model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Wxshop model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Wxshop();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->s_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Wxshop model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->s_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Wxshop model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Wxshop model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Wxshop the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Wxshop::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
