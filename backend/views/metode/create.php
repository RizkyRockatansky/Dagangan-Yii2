<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\metode */

$this->title = 'Create Metode';
// $this->params['breadcrumbs'][] = ['label' => 'Metodes', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="metode-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
