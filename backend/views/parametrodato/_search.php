<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ParametrodatoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parametrodato-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre_fiscal') ?>

    <?= $form->field($model, 'nombre_fantasia') ?>

    <?= $form->field($model, 'sociedad') ?>

    <?= $form->field($model, 'ciudad') ?>

    <?php // echo $form->field($model, 'cuit') ?>

    <?php // echo $form->field($model, 'fecha_inicio') ?>

    <?php // echo $form->field($model, 'fecha_fin') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
