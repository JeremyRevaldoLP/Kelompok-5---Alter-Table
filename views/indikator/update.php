<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Indikator $model */

$this->title = 'Update Indikator: ' . $model->id_indikator;
$this->params['breadcrumbs'][] = ['label' => 'Indikators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_indikator, 'url' => ['view', 'id_indikator' => $model->id_indikator]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indikator-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
