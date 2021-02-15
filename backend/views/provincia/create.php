<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Provincia */

$this->title = 'Agregar Provincia';
$this->params['breadcrumbs'][] = ['label' => 'Provincias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="provincia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
