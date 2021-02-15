<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Productohistorialprecio */

$this->title = 'Actualizar Productohistorialprecio: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Productohistorialprecios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="productohistorialprecio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
