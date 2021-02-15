<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Proveedor ;

/* @var $this yii\web\View */
/* @var $model common\models\Proveedor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'razonsocial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput() ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domicilio')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'ciudad')->dropDownList(  
            ArrayHelper::map(common\models\Ciudad::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

<?= $form->field($model, 'proveedor_estado')->dropDownList(  
            ArrayHelper::map(common\models\ProveedorEstado::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

<?= $form->field($model, 'proveedor_tipo')->dropDownList(  
            ArrayHelper::map(common\models\ProveedorTipo::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 
                        'Agregar' : 
                        'Actualizar', 
                        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
