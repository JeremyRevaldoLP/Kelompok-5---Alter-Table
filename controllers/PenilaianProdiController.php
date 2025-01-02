<?php

namespace app\controllers;

use app\models\PenilaianProdi;
use app\models\PenilaianProdiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenilaianProdiController implements the CRUD actions for PenilaianProdi model.
 */
class PenilaianProdiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all PenilaianProdi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenilaianProdiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PenilaianProdi model.
     * @param int $id_penilaian_prodi Id Penilaian Prodi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_penilaian_prodi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_penilaian_prodi),
        ]);
    }

    /**
     * Creates a new PenilaianProdi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PenilaianProdi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_penilaian_prodi' => $model->id_penilaian_prodi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PenilaianProdi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_penilaian_prodi Id Penilaian Prodi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_penilaian_prodi)
    {
        $model = $this->findModel($id_penilaian_prodi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_penilaian_prodi' => $model->id_penilaian_prodi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PenilaianProdi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_penilaian_prodi Id Penilaian Prodi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_penilaian_prodi)
    {
        $this->findModel($id_penilaian_prodi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PenilaianProdi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_penilaian_prodi Id Penilaian Prodi
     * @return PenilaianProdi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_penilaian_prodi)
    {
        if (($model = PenilaianProdi::findOne(['id_penilaian_prodi' => $id_penilaian_prodi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
