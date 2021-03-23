<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\metode */

$this->title = 'Update Metode: ' . $model->id_metode;
$this->params['breadcrumbs'][] = ['label' => 'Metodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_metode, 'url' => ['view', 'id' => $model->id_metode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="metode-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
