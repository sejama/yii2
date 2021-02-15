<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "proveedor".
 *
 * @property int $id
 * @property string $nombre
 * @property string $razonsocial
 * @property int $telefono
 * @property string $correo
 * @property string $domicilio
 * @property int $ciudad
 * @property int $proveedor_estado
 * @property int $proveedor_tipo
 * @property string $creado
 * @property string|null $editado
 *
 * @property Ciudad $ciudad0
 * @property ProveedorEstado $proveedorEstado
 * @property ProveedorTipo $proveedorTipo
 */
class Proveedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proveedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'razonsocial', 'telefono', 'correo', 'domicilio', 'ciudad', 'proveedor_estado', 'proveedor_tipo', 'creado'], 'required'],
            [['telefono', 'ciudad', 'proveedor_estado', 'proveedor_tipo'], 'integer'],
            [['creado', 'editado'], 'safe'],
            [['nombre', 'razonsocial', 'correo'], 'string', 'max' => 150],
            ['correo', 'email'],
            [['domicilio'], 'string', 'max' => 255],
            [['ciudad'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['ciudad' => 'id']],
            [['proveedor_estado'], 'exist', 'skipOnError' => true, 'targetClass' => ProveedorEstado::className(), 'targetAttribute' => ['proveedor_estado' => 'id']],
            [['proveedor_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => ProveedorTipo::className(), 'targetAttribute' => ['proveedor_tipo' => 'id']],
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
            'razonsocial' => 'Razonsocial',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
            'domicilio' => 'Domicilio',
            'ciudad' => 'Ciudad',
            'proveedor_estado' => 'Proveedor Estado',
            'proveedor_tipo' => 'Proveedor Tipo',
            'creado' => 'Creado',
            'editado' => 'Editado',
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
     * Gets query for [[ProveedorEstado]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProveedorEstado()
    {
        return $this->hasOne(ProveedorEstado::className(), ['id' => 'proveedor_estado']);
    }

    /**
     * Gets query for [[ProveedorTipo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProveedorTipo()
    {
        return $this->hasOne(ProveedorTipo::className(), ['id' => 'proveedor_tipo']);
    }
}
