<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\produk */

$this->title = 'Tambah Produk';
// $this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-create content">
<!-- 
    <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
