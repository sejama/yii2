<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Proveedortipo */

$this->title = 'Agregar Proveedortipo';
$this->params['breadcrumbs'][] = ['label' => 'Proveedortipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedortipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
