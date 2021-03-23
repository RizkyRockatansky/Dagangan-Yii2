<?php

use yii\helpers\Html;
use common\models\Kategori;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use aryelds\sweetalert\SweetAlert;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tab Kategori';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index content">

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
                'query'=>Kategori::find(),
                'pagination'=>[
                    'pagesize'=> 10,
                ],
            ]);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kategori',
            'nama_kategori',

            // ['class' => 'yii\grid\ActionColumn'],
        

             [
                'class' => 'yii\grid\ActionColumn',
                        'header'    => 'Aksi',
                        'template'  => '{leadUpdate} {leadDelete}',
                        'buttons'   =>[
                            'leadUpdate' => function ($url, $model){
                                $url = url::to(['update', 'id' => $model->id_kategori]);
                                return Html::a('<span class="nav-icon fas fa-edit"></span>', $url, ['class' => 'btn btn-warning']);
                            },

                            
                            'leadDelete'=> function ($url, $model){
                                $url = url::to(['delete', 'id' =>$model->id_kategori]);
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

                ]); ?>



            </div>
        </div>
    </div>
</div>
