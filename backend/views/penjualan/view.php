<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\money\MaskMoney;


/* @var $this yii\web\View */
/* @var $model common\models\penjualan */

$this->title = 'Penjualan : ' . $model->created_at;
// $this->params['breadcrumbs'][] = ['label' => 'Penjualans', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penjualan-view">

<?= Html::a('<span class="fas fa-arrow-left"></span>', ['index'], ['class'=> 'btn btn-success']) ?> 
<?php //echo Html::a('<span class="fa fa-print"></span>', ['genpdf'], ['title'=> 'view', 'class'=>'btn btn-primary'])?>
<?= Html::a('<span class="fas fa-print"></span>',['gen-pdf','id' => $model->id_penjualan], ['class'=> 'btn btn-primary']) ?> 





    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_penjualan',
            [
                'attribute'=>'created_at',
                'format'=>['date','d-M-Y']
            ],
            'time_at',
            'nama_produk',
            [
            
                'attribute'=>'harga',
                'format'=>['decimal']
    
                ],
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
        ],
    ]) ?>

</div>
