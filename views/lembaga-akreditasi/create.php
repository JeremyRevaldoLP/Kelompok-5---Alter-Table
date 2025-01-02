<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\LembagaAkreditasi $model */

$this->title = 'Create Lembaga Akreditasi';
$this->params['breadcrumbs'][] = ['label' => 'Lembaga Akreditasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembaga-akreditasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
