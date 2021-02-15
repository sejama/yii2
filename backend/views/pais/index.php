<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PaisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'País';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pais-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar País', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'codigo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
