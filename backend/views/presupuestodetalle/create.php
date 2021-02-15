<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Presupuestodetalle */

$this->title = 'Agregar Presupuestodetalle';
$this->params['breadcrumbs'][] = ['label' => 'Presupuestodetalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presupuestodetalle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
