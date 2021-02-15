<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Presupuestodetalle */

$this->title = 'Actualizar Presupuestodetalle: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Presupuestodetalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="presupuestodetalle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
