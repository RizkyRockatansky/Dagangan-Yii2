<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\penjualan */

$this->title = 'Create Penjualan';
// $this->params['breadcrumbs'][] = ['label' => 'Penjualans', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjualan-create">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
