<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ParametrodatoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parametrodatos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametrodato-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Parametrodato', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre_fiscal',
            'nombre_fantasia',
            'sociedad',
            'ciudad',
            // 'cuit',
            // 'fecha_inicio',
            // 'fecha_fin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
