<?php

use app\models\LembagaAkreditasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LembagaAkreditasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Lembaga Akreditasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembaga-akreditasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lembaga Akreditasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_lembaga_akreditasi',
            'nama_lembaga',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, LembagaAkreditasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_lembaga_akreditasi' => $model->id_lembaga_akreditasi]);
                 }
            ],
        ],
    ]); ?>


</div>
