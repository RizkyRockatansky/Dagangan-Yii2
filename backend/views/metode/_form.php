<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\metode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="metode-form card card-info">
<div class="card-header">
        <h3 class="card-title"><?= HTMl::encode($this->title) ?></h3>
    </div>

    <div class="card-body">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data']
    ]); ?>


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_metode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
