<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Sociedad */

$this->title = 'Agregar Sociedad';
$this->params['breadcrumbs'][] = ['label' => 'Sociedads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sociedad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
