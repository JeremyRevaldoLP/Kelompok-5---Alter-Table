<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */

$this->title = 'Update Akreditasi Prodi: ' . $model->id_akreditasi_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Akreditasi Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_akreditasi_prodi, 'url' => ['view', 'id_akreditasi_prodi' => $model->id_akreditasi_prodi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akreditasi-prodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
