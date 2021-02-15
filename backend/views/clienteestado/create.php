<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Clienteestado */

$this->title = 'Agregar Clienteestado';
$this->params['breadcrumbs'][] = ['label' => 'Clienteestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clienteestado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
