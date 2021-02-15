<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Proveedorestado */

$this->title = 'Agregar Proveedorestado';
$this->params['breadcrumbs'][] = ['label' => 'Proveedorestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedorestado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
