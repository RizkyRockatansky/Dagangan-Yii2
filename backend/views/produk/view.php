<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\produk */

$this->title = $model->nama_produk;
// $this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produk-view content">
    <div class="cashier-view content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class ="card-header">

    <h3 class="card-title"><?= Html::encode($this->title) ?></h3>

    <div class="card-tools">
        <?= Html::a('Lihat Semua', ['index'], ['class'=> 'btn btn-success']) ?> 
        <?= Html::a('Update', ['update', 'id' => $model->id_produk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_produk], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
     </div>
    </div>

<div class="card-body table-responsive p-0">

                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id_produk',
                                'nama_produk',
                                'harga',
                                'deskripsi:ntext',
                                'kategori',
                                [
                                    'attribute' => 'gambar',
                                    'format' => 'raw',
                                    'value' => function($model){
                                        return "<img src='upload/$model->gambar' width='150'>";
                                        
                                    }
                                ],
                            ],
                        ]) ?>
                </div>
             </div>
        </div>
    </div>
</div>
