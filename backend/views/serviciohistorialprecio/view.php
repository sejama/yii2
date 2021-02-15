<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Serviciohistorialprecio */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Serviciohistorialprecios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serviciohistorialprecio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-warning',
            'data' => [
                'confirm' => '¿Está seguro que desea eliminar este registro?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-danger']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'servicio',
            'inicio',
            'fin',
            'precio',
        ],
    ]) ?>

</div>
