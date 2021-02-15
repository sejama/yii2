<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PresupuestodetalleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Presupuestodetalles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presupuestodetalle-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Presupuestodetalle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'presupuesto',
            'producto',
            'servicio',
            'producto_cantidad',
            // 'servicio_cantidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
