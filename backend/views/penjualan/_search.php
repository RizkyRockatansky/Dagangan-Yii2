<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\PenjualanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_penjualan') ?>

    <?= $form->field($model, 'created_at')->input('date')?>

    <?= $form->field($model, 'time_at') ?>

    <?= $form->field($model, 'nama_produk') ?>

    <?= $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'bayar') ?>

    <?php // echo $form->field($model, 'kembalian') ?>

    <?php // echo $form->field($model, 'metode') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
