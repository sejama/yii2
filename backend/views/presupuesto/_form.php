<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Presupuesto ;

/* @var $this yii\web\View */
/* @var $model common\models\Presupuesto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presupuesto-form">

    <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'cliente')->dropDownList(  
            ArrayHelper::map(common\models\Cliente::find()->orderBy('nombre')->all(),
							 'id', 
							 'nombre'), 
			array('prompt' => '--Seleccionar--'));?>

    <?= $form->field($model, 'creado')->textInput() ?>

    <?= $form->field($model, 'editado')->textInput() ?>

    <?= $form->field($model, 'vencimiento')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 
                        'Agregar' : 
                        'Actualizar', 
                        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
