<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Proveedorestado */

$this->title = 'Actualizar Proveedorestado: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proveedorestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="proveedorestado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
