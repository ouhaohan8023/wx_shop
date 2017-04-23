<?php

namespace frontend\controllers;

use app\models\WxLevel1;
use app\models\WxLevel1Search;
use app\models\WxLevel2;
use Yii;
use app\models\Wxshop;
use app\models\WxshopSearch;
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
    }

    public function actionData($id){
//        return $id;
        $query = WxLevel2::find()->where(['l_2_1'=>$id])->all();
        foreach($query as $key => $value){
            $data[$key] = $value->attributes;
        };
//        $data = json_encode($query);
        $data = json_encode($data);
        return $data;
    }

    public function actionSec($id){
        $query = Wxshop::find()->where(['s_2_level'=>$id])->all();
        if(isset($query)){
            foreach($query as $key => $value){
                $data[$key] = $value->attributes;
            };
            var_dump($data);die;
        }else{
            echo 111;die;
        }
        return $this->render('sec',[
            'data' => $data,
        ]);
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