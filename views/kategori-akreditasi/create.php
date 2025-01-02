<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\KategoriAkreditasi $model */

$this->title = 'Create Kategori Akreditasi';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Akreditasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-akreditasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
