<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Metode;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use kartik\time\TimePicker;
use kartik\money\MaskMoney;
use kartik\select2\Select2;
use common\models\Produk;



// use kartikform\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\penjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjualan-form card card-info">

<div class="card-header">
        <h3 class="card-title"><?= HTMl::encode($this->title) ?></h3>
    </div>

    <div class="card-body">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data']
    ]); ?>


    <?php $form = ActiveForm::begin(); ?>
   <?=  $form->field($model, 'created_at')->input('date')
?>


    <?= $form->field($model, 'time_at')->input('time') ?>

    <?php $produk=Produk::find()->all();
     echo $form->field($model, 'nama_produk')->dropDownList(ArrayHelper::map($produk, 'nama_produk',function($produk){return $produk->nama_produk;}),['prompt'=>'--pilih produk--']);
      ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'bayar')->textInput() ?>

    <?= $form->field($model, 'kembalian')->textInput() ?>

    <?php $metode=metode::find()->all();
     echo $form->field($model, 'metode')->dropDownList(ArrayHelper::map($metode, 'id_metode',function($metode){return $metode->id_metode.'-'.$metode->deskripsi;}),['prompt'=>'--pilih Metode--']);
      ?>
      </div>

    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
