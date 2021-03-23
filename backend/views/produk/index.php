<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\Produk;
use yii\data\ActiveDataProvider;
use common\models\Categories;
use yii\bootstrap\Alert;
use aryelds\sweetalert\SweetAlert;



/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tab Produk';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="produkrev-index contents">
    <div class ="row">
        <div class= "col-12">
            <div class="card">
                <!-- <div class="card-title"><?= Html::encode($this->title) ?> -->
                     <div class="card-tools">
                     <?= Html::a('<span class="btn-label"><i class="fa fa-plus"></i></span> Data Baru',['create'], ['class'=> 'btn btn-success btn waves-effect waves-light']) ?>
                    </div>
                </div>
                 <div class="card-body table responsive p-0">

                 <?php $dataProvider = new ActiveDataProvider([
                'query'=>Produk::find(),
                'pagination'=>[
                    'pagesize'=> 10,
                ],
            ]);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_produk',
            'nama_produk',
            [
            
                'attribute'=>'harga',
                'format'=>['decimal']
    
                ],
            'deskripsi:ntext',
            'kategori',
            // 'satuan',
            //'gambar',
            [
                'attribute' => 'gambar',
                'format' => 'raw',
                'value' => function($model){
                    return "<img src='upload/$model->gambar' width='120'>";
                    
                }
            ],
            [
                'attribute' => 'status',
                'format'    => 'raw',
                'filter'    => array(1=>"Tersedia", 2=>"Tidak Tersedia"),
                'value'     => function ($model)
                {
                    return $model->status == 1 ? "<span class='btn btn-success'>Tersedia</span>" : "<span class='btn btn-warning'>Tidak Tersedia</span>";
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                            'header'    => 'Aksi',
                            'template'  => '{leadView} {leadUpdate} {leadDelete}',
                            'buttons'   =>[
                                'leadUpdate' => function ($url, $model){
                                    $url = url::to(['update', 'id' => $model->id_produk]);
                                    return Html::a('<span class="nav-icon fas fa-edit"></span>', $url, ['class' => 'btn btn-warning']);
                                },
                                'leadView' =>function($url,$model){
                                    $url = url::to(['view','id'=> $model->id_produk]);
                                   return Html::a('<span class="fa fa-eye"></span>', $url, ['title'=> 'view', 'class'=>'btn btn-primary']);
                                },

                                'leadDelete'=> function ($url, $model){
                                    $url = url::to(['delete', 'id' =>$model->id_produk]);
                                    return Html::a('<span class="fa fa-trash"></span>', $url, [
                                        'title'    =>'delete',
                                        'data-confirm' => yii::t('yii', 'Anda ingin menghapus item ini?'),
                                        'methood' =>'POST',
                                        'class'=> 'btn btn-danger',
                                                
                                                        
                                        
                                           
                                    ]);

                                 },
                                
                            ]

                        ]

                        // ['class' => 'yii\grid\ActionColumn'],
                ],
        ]);?>



                </div>
            </div>
        </div>
    </div>
