<?php

namespace app\controllers;

use Yii;
use app\models\Rekammedis;
use app\models\RekammedisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RekammedisController implements the CRUD actions for Rekammedis model.
 */
class RekammedisController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Rekammedis models.
     * @return mixed
     */
    public function actionIndex()
    {
        switch (Yii::$app->user->Identity->level_user) {
                case 1: //manager
                    return $this->redirect(['pegawai/index']);
                    break;
                case 2: //admin
                    return $this->redirect(['pasien/index']);
                    break;
                case 3: //dokter
                    return $this->redirect(['pasien/antri']);
                    break;
                case 5: //kasir
                    return $this->redirect(['rekammedis/kasir']);
                    break;
                
                default:
                    break;
            };

        $searchModel = new RekammedisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionKasir()
    {
        switch (Yii::$app->user->Identity->level_user) {
                case 1: //manager
                    return $this->redirect(['pegawai/index']);
                    break;
                case 2: //admin
                    return $this->redirect(['pasien/index']);
                    break;
                case 3: //dokter
                    return $this->redirect(['pasien/antri']);
                    break;
                case 4: //perawat
                    return $this->redirect(['rekammedis/index']);
                    break;
                
                default:
                    break;
            };
        $searchModel = new RekammedisSearch();
        $dataProvider = $searchModel->search_kasir(Yii::$app->request->queryParams);

        return $this->render('bayar', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Rekammedis model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Rekammedis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Rekammedis();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_rkmd]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionRekam($id)
    {
        $model = new Rekammedis();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_pasien = $id;
            $model->id_dokter = Yii::$app->user->Identity->id_pegawai;
            $model->save();
            return $this->redirect(['pasien/antri']);
        }

        return $this->render('rekam', [
            'model' => $model,
        ]);
    }

    public function actionResep($id)
    {
        $model = $this->findModel($id);
        $model->status = 1;

        if ($model->save()) {
            return $this->redirect(['resep/createe','id'=>$model->id_pasien]);
        }
    }

    public function actionBayar($id)
    {
        $model = $this->findModel($id);
        $model->status = 2;

        if ($model->save()) {
            return $this->redirect(['pembayaran/createe','id'=>$model->id_rkmd]);
        }
    }

    /**
     * Updates an existing Rekammedis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_rkmd]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Rekammedis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Rekammedis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Rekammedis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Rekammedis::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
