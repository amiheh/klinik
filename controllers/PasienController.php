<?php

namespace app\controllers;

use Yii;
use app\models\Pasien;
use app\models\PasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PasienController implements the CRUD actions for Pasien model.
 */
class PasienController extends Controller
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
     * Lists all Pasien models.
     * @return mixed
     */
    public function actionIndex()
    {

        switch (Yii::$app->user->Identity->level_user) {
                case 1: //admin
                    return $this->redirect(['pegawai/index']);
                    break;
                case 3: //dokter
                    return $this->redirect(['pasien/antri']);
                    break;
                case 4: //perawat
                    return $this->redirect(['rekammedis/index']);
                    break;
                case 5: //kasir
                    return $this->redirect(['rekammedis/kasir']);
                    break;
                
                default:
                    break;
            };

        $model = new Pasien();
        $searchModel = new PasienSearch();
        //$query = $searchModel->search(Yii::$app->request->queryParams['status' => 1])->where();
        $dataProvider = $searchModel->search_antri(Yii::$app->request->queryParams);

        if ($model->load(Yii::$app->request->post())) {
            $model->status = 0;
            $model->save();
            return $this->refresh();
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'status' => 1,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }

    public function actionAntri()
    {

        switch (Yii::$app->user->Identity->level_user) {
                case 1: //admin
                    return $this->redirect(['pegawai/index']);
                    break;
                case 2: //
                    return $this->redirect(['pasien/index']);
                    break;
                case 4: //perawat
                    return $this->redirect(['rekammedis/index']);
                    break;
                case 5: //kasir
                    return $this->redirect(['rekammedis/kasir']);
                    break;
                
                default:
                    break;
            };

        $model = new Pasien();
        $searchModel = new PasienSearch();
        //$query = $searchModel->search(Yii::$app->request->queryParams['status' => 1])->where();
        $dataProvider = $searchModel->search_accept(Yii::$app->request->queryParams);

        return $this->render('antri', [
            'searchModel' => $searchModel,
            'status' => 1,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Pasien model.
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
     * Creates a new Pasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pasien();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pasien]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pasien]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pasien model.
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

    public function actionStatus($id)
    {
        $model = $this->findModel($id);
        $model->status = 1;

        if ($model->save()) {
            return $this->redirect(['index']);
        }
    }

    public function actionStart($id)
    {
        $model = $this->findModel($id);
        $model->status = 2;

        if ($model->save()) {
            return $this->redirect(['rekammedis/rekam','id'=>$model->id_pasien]);
        }
    }
    /**
     * Finds the Pasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pasien::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
