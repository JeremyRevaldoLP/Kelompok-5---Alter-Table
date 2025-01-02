<?php

use app\models\KategoriAkreditasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KategoriAkreditasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kategori Akreditasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-akreditasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kategori Akreditasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kategori_akreditasi',
            'deskripsi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KategoriAkreditasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kategori_akreditasi' => $model->id_kategori_akreditasi]);
                 }
            ],
        ],
    ]); ?>


</div>
