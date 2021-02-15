<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Serviciohistorialprecio */

$this->title = 'Agregar Serviciohistorialprecio';
$this->params['breadcrumbs'][] = ['label' => 'Serviciohistorialprecios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serviciohistorialprecio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
