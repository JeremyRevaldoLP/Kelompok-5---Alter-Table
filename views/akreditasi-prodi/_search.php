<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="akreditasi-prodi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_akreditasi_prodi') ?>

    <?= $form->field($model, 'tanggal_mulai') ?>

    <?= $form->field($model, 'tanggal_akhir') ?>

    <?= $form->field($model, 'no_sk') ?>

    <?= $form->field($model, 'id_lembaga_akreditasi') ?>

    <?php // echo $form->field($model, 'id_prodi') ?>

    <?php // echo $form->field($model, 'id_kategori_akreditasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
