<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\kategori */

$this->title = 'Tambah Data Kategori';
// $this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-create content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
