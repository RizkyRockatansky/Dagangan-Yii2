<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Metode Pembayaran';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="metode-index">

    
    <p>
        <?= Html::a('Tambah Metode Pembayaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_metode',
            'deskripsi:ntext',

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                        'header'    => 'Aksi',
                        'template'  => '{leadView} {leadUpdate} {leadDelete}',
                        'buttons'   =>[
                            'leadUpdate' => function ($url, $model){
                                $url = url::to(['update', 'id' => $model->id_metode]);
                                return Html::a('<span class="nav-icon fas fa-edit"></span>', $url, ['class' => 'btn btn-warning']);
                            },

                            'leadView' =>function($url,$model){
                                $url = url::to(['view','id'=> $model->id_metode]);
                               return Html::a('<span class="fa fa-eye"></span>', $url, ['title'=> 'view', 'class'=>'btn btn-primary']);
                            },

                            'leadDelete'=> function ($url, $model){
                                $url = url::to(['delete', 'id' =>$model->id_metode]);
                                return Html::a('<span class="fa fa-trash"></span>', $url, [
                                    'title'    =>'delete',
                                    'data-confirm' => yii::t('yii', 'Anda ingin menghapus item ini?'),
                                    'methood' =>'POST',
                                    'class'=> 'btn btn-danger',
                                    
                                    

                                ]);

                             },
                            
                        ]

                    ]

        ],
    ]); ?>


</div>
