<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Productohistorialprecio ;

/* @var $this yii\web\View */
/* @var $model common\models\Productohistorialprecio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productohistorialprecio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'precio')->textInput() ?>

<?= $form->field($model, 'producto')->dropDownList(  
            ArrayHelper::map(common\models\Producto::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

    <?= $form->field($model, 'inicio')->textInput() ?>

    <?= $form->field($model, 'fin')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 
                        'Agregar' : 
                        'Actualizar', 
                        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
