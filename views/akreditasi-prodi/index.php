<?php

use app\models\AkreditasiProdi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Daftar Akreditasi Prodi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akreditasi-prodi-index container mt-5">

    <!-- Header Section -->
    <div class="text-center mb-4">
        <h1 class="display-5 text-primary"><?= Html::encode($this->title) ?></h1>
        <p class="lead">Semua akreditasi prodi yang terdaftar dalam sistem.</p>
    </div>

    <!-- Button Create -->
    <div class="mb-3">
        <?= Html::a('<i class="bi bi-plus-circle"></i> Buat Akreditasi Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <!-- Grid View -->
    <div class="card shadow-lg">
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'options' => ['class' => 'table-responsive'],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id_akreditasi_prodi',
                    'tanggal_mulai:date',
                    'tanggal_akhir:date',
                    'no_sk',
                    'id_lembaga_akreditasi',
                    //'id_prodi',
                    //'id_kategori_akreditasi',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, AkreditasiProdi $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id_akreditasi_prodi' => $model->id_akreditasi_prodi]);
                        },
                        'buttons' => [
                            'view' => function ($url, $model, $key) {
                                return Html::a('<i class="bi bi-eye"></i>', $url, ['class' => 'btn btn-primary btn-sm']);
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a('<i class="bi bi-pencil"></i>', $url, ['class' => 'btn btn-warning btn-sm']);
                            },
                            'delete' => function ($url, $model, $key) {
                                return Html::a('<i class="bi bi-trash"></i>', $url, [
                                    'class' => 'btn btn-danger btn-sm',
                                    'data-confirm' => 'Apakah Anda yakin ingin menghapus data ini?',
                                    'data-method' => 'post',
                                ]);
                            },
                        ],
                    ],
                ],
                'tableOptions' => ['class' => 'table table-striped table-bordered'],
            ]); ?>
        </div>
    </div>

</div>
