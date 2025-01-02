<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\LembagaAkreditasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="lembaga-akreditasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_lembaga_akreditasi')->textInput() ?>

    <?= $form->field($model, 'nama_lembaga')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>