<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Proveedor */

$this->title = 'Agregar Proveedor';
$this->params['breadcrumbs'][] = ['label' => 'Proveedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
