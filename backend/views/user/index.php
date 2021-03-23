<?php

use yii\helpers\Html;
use backend\models\User;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tab User';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index contents">
    <div class ="row">
        <div class= "col-12">
            <div class="card">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
</div>

    <p>
        <?php // echo Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php $dataProvider = new ActiveDataProvider([
        'query'=>User::find(),
        'pagination'=>[
            'pageSize'=>3,
        ],
    ])?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            //'status',
            // 'created_at',
            //'updated_at',
            //'verification_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div>
    </div>
</div>
