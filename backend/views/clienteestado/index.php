<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClienteestadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clienteestados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clienteestado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Clienteestado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'descripcion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
