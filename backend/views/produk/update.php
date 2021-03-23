<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\produk */

$this->title = 'Update Produk: ' . $model->nama_produk;
// $this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_produk, 'url' => ['view', 'id' => $model->id_produk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produk-update">
<?= Html::a('<- Kembali', ['index'], ['class'=> 'btn btn-success']) ?> 

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
