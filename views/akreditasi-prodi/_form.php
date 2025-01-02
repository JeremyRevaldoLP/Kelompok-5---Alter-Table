<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\LembagaAkreditasi;
use app\models\Prodi;
use app\models\KategoriAkreditasi;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="akreditasi-prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- ID Akreditasi Prodi -->
    <?= $form->field($model, 'id_akreditasi_prodi')->textInput() ?>

    <!-- Tanggal Mulai -->
    <?= $form->field($model, 'tanggal_mulai')->textInput(['type' => 'date']) ?>

    <!-- Tanggal Akhir -->
    <?= $form->field($model, 'tanggal_akhir')->textInput(['type' => 'date']) ?>

    <!-- No SK -->
    <?= $form->field($model, 'no_sk')->textInput(['maxlength' => true]) ?>

    <!-- Dropdown untuk ID Lembaga Akreditasi -->
    <?= $form->field($model, 'id_lembaga_akreditasi')->dropDownList(
        ArrayHelper::map(LembagaAkreditasi::find()->all(), 'id_lembaga_akreditasi', 'nama_lembaga'),
        ['prompt' => '-- Pilih Lembaga Akreditasi --']
    ) ?>

    <!-- Dropdown untuk ID Prodi -->
    <?= $form->field($model, 'id_prodi')->dropDownList(
        ArrayHelper::map(Prodi::find()->all(), 'id_prodi', 'nama_prodi'),
        ['prompt' => '-- Pilih Program Studi --']
    ) ?>

    <!-- Dropdown untuk ID Kategori Akreditasi -->
    <?= $form->field($model, 'id_kategori_akreditasi')->dropDownList(
        ArrayHelper::map(KategoriAkreditasi::find()->all(), 'id_kategori_akreditasi', 'deskripsi'),
        ['prompt' => '-- Pilih Kategori Akreditasi --']
    ) ?>

    <!-- Tombol Submit -->
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
