<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PresupuestoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Presupuestos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presupuesto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Presupuesto', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Imprimir Presupuesto', ['imprimirpresupuesto'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cliente',
            'creado',
            'editado',
            'vencimiento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
