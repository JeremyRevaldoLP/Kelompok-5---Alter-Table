<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Fakultas $model */

$this->title = 'Update Fakultas: ' . $model->id_fakultas;
$this->params['breadcrumbs'][] = ['label' => 'Fakultas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_fakultas, 'url' => ['view', 'id_fakultas' => $model->id_fakultas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fakultas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
