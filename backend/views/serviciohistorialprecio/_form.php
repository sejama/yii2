<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Serviciohistorialprecio ;

/* @var $this yii\web\View */
/* @var $model common\models\Serviciohistorialprecio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="serviciohistorialprecio-form">

    <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'servicio')->dropDownList(  
            ArrayHelper::map(common\models\Servicio::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

    <?= $form->field($model, 'inicio')->textInput() ?>

    <?= $form->field($model, 'fin')->textInput() ?>

    <?= $form->field($model, 'precio')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 
                        'Agregar' : 
                        'Actualizar', 
                        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
