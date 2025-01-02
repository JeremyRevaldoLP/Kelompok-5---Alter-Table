<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\LembagaAkreditasi $model */

$this->title = $model->id_lembaga_akreditasi;
$this->params['breadcrumbs'][] = ['label' => 'Lembaga Akreditasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lembaga-akreditasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_lembaga_akreditasi' => $model->id_lembaga_akreditasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_lembaga_akreditasi' => $model->id_lembaga_akreditasi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_lembaga_akreditasi',
            'nama_lembaga',
        ],
    ]) ?>

</div>
