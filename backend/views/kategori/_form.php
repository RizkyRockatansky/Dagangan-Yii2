<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\kategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-form card card-info">
<div class="card-header">
<h3 class="card-title"><?= HTMl::encode($this->title) ?></h3>
    </div>

    <div class="card-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kategori')->textInput(['maxlength' => true]) ?>

    <div class="card-footer">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
