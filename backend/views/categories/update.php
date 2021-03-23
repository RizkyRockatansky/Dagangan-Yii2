<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Categories */

$this->title = 'Update Kategori: ' . $model->id_categories;
// $this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id_categories, 'url' => ['view', 'id' => $model->id_categories]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categories-update">
<?= Html::a('<- Kembali', ['index'], ['class'=> 'btn  btn-secondary']) ?> 

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
