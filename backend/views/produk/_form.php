<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\icons\FontAwesomeAsset;
use common\models\Categories;
use common\models\Satuan;

/* @var $this yii\web\View */
/* @var $model common\models\produk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-form card card-info">
<div class="card-header">
        <h3 class="card-title"><?= HTMl::encode($this->title) ?></h3>
    </div>

    <div class="card-body">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data']
    ]); ?>

 

    <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?php
    $categories=categories::find()->all();
    echo $form->field($model, 'kategori')->dropDownList(ArrayHelper::map($categories, 'id_categories',function($categories){return $categories->id_categories.'-'.$categories->keterangan;}),['prompt'=>'--pilih kategori--']);
    ?>



    <?= $form->field($model, 'gambar')->fileInput() ?>
    <?=$form->field($model,'status')->textInput(['placeholder'=>'Input 1 untuk tersedia atau 2 untuk tidak tersedia'])?>

    <div class="card-footer">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
