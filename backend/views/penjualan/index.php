<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PenjualanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penjualan';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjualan-index">

    

    <p>
    <?= Html::a('<span class="fas fa-file-pdf"></span>', ['export-pdf'], ['class'=>'btn btn-danger']); ?> 
    <?= Html::a('<span class="fas fa-file-excel"></span>', ['export-excel2'], ['class'=>'btn btn-success']); ?> 
    <?= Html::a('<span class="fas fa-file-word"></span>', ['export-word'], ['class'=>'btn btn-primary']); ?>
 
        <?php // echo Html::a('Create Penjualan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_penjualan',
            [
                'attribute'=>'created_at',
                'format'=>['date','d-M-Y']
            ],
            
            'time_at',
            'nama_produk',
            // 'harga',
            [
            
            'attribute'=>'harga',
            'format'=>['decimal']

            ],
            // 'bayar',

            [
            
                'attribute'=>'bayar',
                'format'=>['decimal']
    
                ],
            // 'kembalian',

            [
            
                'attribute'=>'kembalian',
                'format'=>['decimal']
    
                ],
            'metode',

            [
                'class' => 'yii\grid\ActionColumn',
                        'header'    => 'Aksi',
                        'template'  => '{leadView}',
                        'buttons'   =>[
                            'leadView' =>function($url,$model){
                                $url = url::to(['view','id'=> $model->id_penjualan]);
                               return Html::a('<span class="fa fa-eye"></span>', $url, ['title'=> 'view', 'class'=>'btn btn-info']);
                         },
                        ]
            ],
            
        ],
    ]); ?>


</div>
