<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => common\models\Parametrodato::find()->where(['id' => 1])->one()->nombre_fantasia . ' - Back',//Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Iniciar Sesión', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Parametros', 'url' => ['product/index'], 'items' => [
            ['label' => 'Datos Propios', 'url' => ['parametrodato/index']],
        ]];
        $menuItems[] = ['label' => 'Presupuesto', 'url' => ['product/index'], 'items' => [
            ['label' => 'Presupuesto', 'url' => ['presupuesto/index']],
            ['label' => 'Presupuesto Detalle', 'url' => ['presupuestodetalle/index']],
        ]];
        $menuItems[] = ['label' => 'Productos y Servicio', 'items' => [
            ['label' => 'Producto', 'url' => ['producto/index']],
            ['label' => 'Producto Precio', 'url' => ['productohistorialprecio/index']],
            ['label' => 'Servicio', 'url' => ['servicio/index']],
            ['label' => 'Servicio Precio', 'url' => ['serviciohistorialprecio/index']],
        ]];

        $menuItems[] = ['label' => 'Proveedor', 'items' => [
            ['label' => 'Proveedor', 'url' => ['proveedor/index']],
            ['label' => 'Proveedor Tipo', 'url' => ['proveedortipo/index']],
            ['label' => 'Proveedor Estado', 'url' => ['proveedorestado/index']],
        ]];
        $menuItems[] = ['label' => 'Cliente', 'items' => [
            ['label' => 'Cliente', 'url' => ['cliente/index']],
            ['label' => 'Cliente Tipo', 'url' => ['clientetipo/index']],
            ['label' => 'Cliente Estado', 'url' => ['clienteestado/index']],
        ]];

        $menuItems[] =['label' => 'Localidades', 'url' => ['product/index'], 'items' => [
            ['label' => 'Pais', 'url' => ['pais/index']],
            ['label' => 'Provincia', 'url' => ['provincia/index']],
            ['label' => 'Ciudad', 'url' => ['ciudad/index']],
        ]];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Cerrar Sesión (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(common\models\Parametrodato::find()->where(['id' => 1])->one()->nombre_fantasia /*Yii::$app->name*/) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
