<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "servicio".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 * @property string $creado
 * @property string|null $editado
 *
 * @property ServicioHistorialPrecio[] $servicioHistorialPrecios
 */
class Servicio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'creado'], 'required'],
            [['creado', 'editado'], 'safe'],
            [['nombre'], 'string', 'max' => 150],
            [['descripcion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'creado' => 'Creado',
            'editado' => 'Editado',
        ];
    }

    /**
     * Gets query for [[ServicioHistorialPrecios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicioHistorialPrecios()
    {
        return $this->hasMany(ServicioHistorialPrecio::className(), ['servicio' => 'id']);
    }
}
