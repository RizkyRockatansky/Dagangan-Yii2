<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


\yii\web\YiiAsset::register($this);
$this->title = 'Penjualan : ' . $model->created_at;

?>
<div class="penjualan-view">






    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_penjualan',
            'created_at',
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
        
                    [
            
                        'attribute'=>'kembalian',
                        'format'=>['decimal']
            
                        ],
            'metode',
        ],
    ]) ?>

</div>
