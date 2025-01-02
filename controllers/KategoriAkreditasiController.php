<?php

namespace app\controllers;

use app\models\KategoriAkreditasi;
use app\models\KategoriAkreditasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KategoriAkreditasiController implements the CRUD actions for KategoriAkreditasi model.
 */
class KategoriAkreditasiController extends Controller
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
     * Lists all KategoriAkreditasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KategoriAkreditasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KategoriAkreditasi model.
     * @param int $id_kategori_akreditasi Id Kategori Akreditasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kategori_akreditasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kategori_akreditasi),
        ]);
    }

    /**
     * Creates a new KategoriAkreditasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KategoriAkreditasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kategori_akreditasi' => $model->id_kategori_akreditasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KategoriAkreditasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kategori_akreditasi Id Kategori Akreditasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kategori_akreditasi)
    {
        $model = $this->findModel($id_kategori_akreditasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kategori_akreditasi' => $model->id_kategori_akreditasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KategoriAkreditasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kategori_akreditasi Id Kategori Akreditasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kategori_akreditasi)
    {
        $this->findModel($id_kategori_akreditasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KategoriAkreditasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kategori_akreditasi Id Kategori Akreditasi
     * @return KategoriAkreditasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kategori_akreditasi)
    {
        if (($model = KategoriAkreditasi::findOne(['id_kategori_akreditasi' => $id_kategori_akreditasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
