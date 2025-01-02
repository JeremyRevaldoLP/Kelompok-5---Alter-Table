<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\LembagaAkreditasi $model */

$this->title = 'Update Lembaga Akreditasi: ' . $model->id_lembaga_akreditasi;
$this->params['breadcrumbs'][] = ['label' => 'Lembaga Akreditasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lembaga_akreditasi, 'url' => ['view', 'id_lembaga_akreditasi' => $model->id_lembaga_akreditasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lembaga-akreditasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
