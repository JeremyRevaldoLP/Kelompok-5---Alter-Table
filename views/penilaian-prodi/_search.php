<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PenilaianProdiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-prodi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_penilaian_prodi') ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'nilai') ?>

    <?= $form->field($model, 'id_prodi') ?>

    <?= $form->field($model, 'id_indikator') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
