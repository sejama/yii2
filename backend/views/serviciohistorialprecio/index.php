<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ServiciohistorialprecioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Serviciohistorialprecios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serviciohistorialprecio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Serviciohistorialprecio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'servicio',
            'inicio',
            'fin',
            'precio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
