<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Kategori;
/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form card card-info">
<div class="card-header">

<h3 class="card-title"> <?php $form = ActiveForm::begin(); ?> </h3>
</div>
            <div class="card-body">

            <?php $form = ActiveForm::begin([
                'options' => ['enctype'=>'multipart/form-data']
            ]); ?>

    <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?php
    $kategori=Kategori::find()->all();
    echo $form->field($model, 'id_kategori')->dropDownList(ArrayHelper::map($kategori, 'id_kategori',function($kategori){return $kategori->id_kategori.'-'.$kategori->nama_kategori;}),['prompt'=>'--pilih kategori--']);
    ?>

    <?= $form->field($model, 'gambar')->fileInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
