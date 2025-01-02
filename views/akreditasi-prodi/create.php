<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */

$this->title = 'Create Akreditasi Prodi';
$this->params['breadcrumbs'][] = ['label' => 'Akreditasi Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akreditasi-prodi-create container mt-5">

    <!-- Judul Halaman -->
    <div class="text-center mb-4">
        <h1 class="display-5 text-primary"><?= Html::encode($this->title) ?></h1>
        <p class="lead">Silakan isi form di bawah ini untuk menambahkan data akreditasi prodi.</p>
    </div>

    <!-- Form Wrapper -->
    <div class="card shadow-lg p-4">
        <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

</div>

