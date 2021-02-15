<?php
use yii\Helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OrdentrabajoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/*usuarios = $dataProvider->getModels();
ArrayHelper::multisort($usuarios, ['apellido'], [SORT_ASC]);*/
?>
<style>
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 30px;
}
td {
    height: 20px;
}
</style>

<center> <h1 > Presupuesto </h1></center>

<div  class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;">
<table class="table ">
    <tbody>
        <tr>
            <th style="width: 35%;">Grupo Trabajo - Area</th>
            <th style="width: 20%;">Apellido Nombre</th>
            <th style="width: 10%;">Usuario</th>
            <th style="width: 10%;">Contraseña</th>
            <th style="width: 25%;">Equipo - IP</th>

        </tr>
        <?php /*foreach ($usuarios as $user) {*/?>
          <tr>
              <td><?php /*
    common\models\Grupotrabajo::find()->where(['id' => common\models\Equipo::find()->where(['id' => $user->equipo])->One()->grupotrabajo])->One()->nombre . " - " .common\models\Area::find()->where(['id' => common\models\Grupotrabajo::find()->where(['id' => common\models\Equipo::find()->where(['id' => $user->equipo])->One()->grupotrabajo])->One()->area])->One()->nombre*/?></td>
              <td> <?php //$user->apellido . " " . $user->nombre?></td>
              <td style="text-align: center"> <?php //$user->username?></td>
              <td style="text-align: center"> <?php //"f*" . $user->contrasena?></td>
              <td> <?php //common\models\Equipo::find()->where(['id' => $user->equipo])->One()->nombre . " - " . common\models\Equipo::find()->where(['id' => $user->equipo])->One()->ip?></td>
        </tr>
        <?php //}?>
    </tbody>
</table>
<div>
