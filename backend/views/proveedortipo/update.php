<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Proveedortipo */

$this->title = 'Actualizar Proveedortipo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proveedortipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="proveedortipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
