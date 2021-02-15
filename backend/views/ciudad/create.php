<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Ciudad */

$this->title = 'Agregar Ciudad';
$this->params['breadcrumbs'][] = ['label' => 'Ciudads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciudad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
