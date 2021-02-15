<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PresupuestodetalleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presupuestodetalle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'presupuesto') ?>

    <?= $form->field($model, 'producto') ?>

    <?= $form->field($model, 'servicio') ?>

    <?= $form->field($model, 'producto_cantidad') ?>

    <?php // echo $form->field($model, 'servicio_cantidad') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
