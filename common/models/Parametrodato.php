<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parametro_dato".
 *
 * @property int $id
 * @property string $nombre_fiscal
 * @property string $nombre_fantasia
 * @property int $sociedad
 * @property int $ciudad
 * @property string $cuit
 * @property string $fecha_inicio
 * @property string|null $fecha_fin
 *
 * @property Ciudad $ciudad0
 * @property Sociedad $sociedad0
 */
class Parametrodato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parametro_dato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_fiscal', 'nombre_fantasia', 'sociedad', 'ciudad', 'cuit', 'fecha_inicio'], 'required'],
            [['sociedad', 'ciudad'], 'integer'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['nombre_fiscal', 'nombre_fantasia'], 'string', 'max' => 255],
            [['cuit'], 'string', 'max' => 13],
            [['ciudad'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['ciudad' => 'id']],
            [['sociedad'], 'exist', 'skipOnError' => true, 'targetClass' => Sociedad::className(), 'targetAttribute' => ['sociedad' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_fiscal' => 'Nombre Fiscal',
            'nombre_fantasia' => 'Nombre Fantasia',
            'sociedad' => 'Sociedad',
            'ciudad' => 'Ciudad',
            'cuit' => 'Cuit',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
        ];
    }

    /**
     * Gets query for [[Ciudad0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCiudad0()
    {
        return $this->hasOne(Ciudad::className(), ['id' => 'ciudad']);
    }

    /**
     * Gets query for [[Sociedad0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSociedad0()
    {
        return $this->hasOne(Sociedad::className(), ['id' => 'sociedad']);
    }
}
