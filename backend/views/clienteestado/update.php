<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Clienteestado */

$this->title = 'Actualizar Clienteestado: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Clienteestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="clienteestado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
