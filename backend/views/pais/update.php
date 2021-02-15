<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pais */

$this->title = 'Actualizar País: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'País', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="pais-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
