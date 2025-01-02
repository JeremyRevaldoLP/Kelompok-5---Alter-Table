<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KategoriAkreditasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kategori-akreditasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kategori_akreditasi')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
