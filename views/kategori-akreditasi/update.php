<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\KategoriAkreditasi $model */

$this->title = 'Update Kategori Akreditasi: ' . $model->id_kategori_akreditasi;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Akreditasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori_akreditasi, 'url' => ['view', 'id_kategori_akreditasi' => $model->id_kategori_akreditasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-akreditasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
