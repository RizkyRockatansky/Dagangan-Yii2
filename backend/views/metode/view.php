<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\metode */

$this->title = $model->id_metode;
$this->params['breadcrumbs'][] = ['label' => 'Metodes', 'url' => ['index']];
\yii\web\YiiAsset::register($this);
?>
<div class="metode-view">



    <p>
    <?= Html::a('Lihat Semua', ['index'], ['class'=> 'btn btn-success']) ?> 
        <?= Html::a('Update', ['update', 'id' => $model->id_metode], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_metode], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_metode',
            'deskripsi:ntext',
        ],
    ]) ?>

</div>
