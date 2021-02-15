<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductohistorialprecioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productohistorialprecios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productohistorialprecio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Productohistorialprecio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'precio',
            'producto',
            'inicio',
            'fin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
