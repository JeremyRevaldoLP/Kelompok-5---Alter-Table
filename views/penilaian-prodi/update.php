<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PenilaianProdi $model */

$this->title = 'Update Penilaian Prodi: ' . $model->id_penilaian_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penilaian_prodi, 'url' => ['view', 'id_penilaian_prodi' => $model->id_penilaian_prodi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-prodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
