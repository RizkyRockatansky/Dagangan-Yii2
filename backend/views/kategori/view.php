<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\kategori */

$this->title = $model->nama_kategori;
// $this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kategori-view content">
<div class="row">
            <div class="col-12">
                <div class="card">
                     <div class ="card-header">

                     <!-- <h3 class="card-title"><?= Html::encode($this->title) ?></h3> -->

        <?= Html::a('Lihat Semua', ['index'], ['class'=> 'btn btn-success']) ?> 
        <?= Html::a('Update', ['update', 'id' => $model->id_kategori], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kategori], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Anda yakin akan menghapus item ini?',
                'method' => 'post',
            ],
        ]) ?>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kategori',
            'nama_kategori',
        ],
    ]) ?>
                 </div>
             </div>
         </div>
    </div>
</div>
