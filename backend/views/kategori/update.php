<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\kategori */

$this->title = 'Update Kategori: ' . $model->nama_kategori;
// $this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id_kategori, 'url' => ['view', 'id' => $model->id_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-update">
<?= Html::a('<- Kembali', ['index'], ['class'=> 'btn btn-success']) ?> 

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
