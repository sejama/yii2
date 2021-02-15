<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Parametrodato ;

/* @var $this yii\web\View */
/* @var $model common\models\Parametrodato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parametrodato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_fiscal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_fantasia')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'sociedad')->dropDownList(  
            ArrayHelper::map(common\models\Sociedad::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

<?= $form->field($model, 'ciudad')->dropDownList(  
            ArrayHelper::map(common\models\Ciudad::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

    <?= $form->field($model, 'cuit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'fecha_fin')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 
                        'Agregar' : 
                        'Actualizar', 
                        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
