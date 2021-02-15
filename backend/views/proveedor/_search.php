<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProveedorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'razonsocial') ?>

    <?= $form->field($model, 'telefono') ?>

    <?= $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'domicilio') ?>

    <?php // echo $form->field($model, 'ciudad') ?>

    <?php // echo $form->field($model, 'proveedor_estado') ?>

    <?php // echo $form->field($model, 'proveedor_tipo') ?>

    <?php // echo $form->field($model, 'creado') ?>

    <?php // echo $form->field($model, 'editado') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
