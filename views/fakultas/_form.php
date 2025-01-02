<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Fakultas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="fakultas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_fakultas')->textInput() ?>

    <?= $form->field($model, 'nama_fakultas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'singkatan_fakultas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_universitas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
