<?php

namespace app\controllers;

use app\models\LembagaAkreditasi;
use app\models\LembagaAkreditasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LembagaAkreditasiController implements the CRUD actions for LembagaAkreditasi model.
 */
class LembagaAkreditasiController extends Controller
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
     * Lists all LembagaAkreditasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LembagaAkreditasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LembagaAkreditasi model.
     * @param int $id_lembaga_akreditasi Id Lembaga Akreditasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_lembaga_akreditasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_lembaga_akreditasi),
        ]);
    }

    /**
     * Creates a new LembagaAkreditasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new LembagaAkreditasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_lembaga_akreditasi' => $model->id_lembaga_akreditasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LembagaAkreditasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_lembaga_akreditasi Id Lembaga Akreditasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_lembaga_akreditasi)
    {
        $model = $this->findModel($id_lembaga_akreditasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_lembaga_akreditasi' => $model->id_lembaga_akreditasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LembagaAkreditasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_lembaga_akreditasi Id Lembaga Akreditasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_lembaga_akreditasi)
    {
        $this->findModel($id_lembaga_akreditasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the LembagaAkreditasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_lembaga_akreditasi Id Lembaga Akreditasi
     * @return LembagaAkreditasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_lembaga_akreditasi)
    {
        if (($model = LembagaAkreditasi::findOne(['id_lembaga_akreditasi' => $id_lembaga_akreditasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
