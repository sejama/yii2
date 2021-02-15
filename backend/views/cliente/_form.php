<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Cliente ;

/* @var $this yii\web\View */
/* @var $model common\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dni')->textInput() ?>

    <?= $form->field($model, 'cuil')->textInput() ?>

    <?= $form->field($model, 'domicilio')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'ciudad')->dropDownList(  
            ArrayHelper::map(common\models\Ciudad::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coreo')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'cliente_tipo')->dropDownList(  
            ArrayHelper::map(common\models\ClienteTipo::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

<?= $form->field($model, 'cliente_estado')->dropDownList(  
            ArrayHelper::map(common\models\ClienteEstado::find()->orderBy('nombre')->all(),
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
