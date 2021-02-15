<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sociedad */

$this->title = 'Actualizar Sociedad: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sociedads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="sociedad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
