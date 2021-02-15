<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Presupuestodetalle ;

/* @var $this yii\web\View */
/* @var $model common\models\Presupuestodetalle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presupuestodetalle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'presupuesto')->dropDownList(  
            ArrayHelper::map(common\models\Presupuesto::find()->orderBy('cliente')->all(),
							 'id', 
							 'cliente'), 
			array('prompt' => '--Seleccionar--'));?>

    <?= $form->field($model, 'producto')->dropDownList(  
            ArrayHelper::map(common\models\Producto::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

    <?= $form->field($model, 'producto_cantidad')->textInput() ?>

    <?= $form->field($model, 'servicio')->dropDownList(  
            ArrayHelper::map(common\models\Servicio::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

    <?= $form->field($model, 'servicio_cantidad')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 
                        'Agregar' : 
                        'Actualizar', 
                        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
