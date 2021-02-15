<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Parametrodato */

$this->title = 'Actualizar Parametrodato: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Parametrodatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="parametrodato-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
