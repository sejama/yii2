<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Parametrodato */

$this->title = 'Agregar Parametrodato';
$this->params['breadcrumbs'][] = ['label' => 'Parametrodatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametrodato-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
