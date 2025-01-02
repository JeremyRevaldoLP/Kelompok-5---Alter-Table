<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Prodi;
use app\models\Indikator;

/** @var yii\web\View $this */
/** @var app\models\PenilaianProdi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- ID Penilaian Prodi -->
    <?= $form->field($model, 'id_penilaian_prodi')->textInput() ?>

    <!-- Tahun -->
    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true, 'type' => 'number', 'placeholder' => 'Masukkan tahun penilaian']) ?>

    <!-- Nilai -->
    <?= $form->field($model, 'nilai')->textInput(['maxlength' => true, 'type' => 'number', 'step' => '0.01', 'placeholder' => 'Masukkan nilai penilaian']) ?>

    <!-- Dropdown untuk ID Prodi -->
    <?= $form->field($model, 'id_prodi')->dropDownList(
        ArrayHelper::map(Prodi::find()->all(), 'id_prodi', 'nama_prodi'),
        ['prompt' => '-- Pilih Program Studi --']
    ) ?>

    <!-- Dropdown untuk ID Indikator -->
    <?= $form->field($model, 'id_indikator')->dropDownList(
        ArrayHelper::map(Indikator::find()->all(), 'id_indikator', 'nama_indikator'),
        ['prompt' => '-- Pilih Indikator Penilaian --']
    ) ?>

    <!-- Tombol Submit -->
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
