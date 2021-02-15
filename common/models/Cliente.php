<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property string $nombre
 * @property int $dni
 * @property int $cuil
 * @property string $domicilio
 * @property int $ciudad
 * @property string $telefono
 * @property string $coreo
 * @property int $cliente_tipo
 * @property int $cliente_estado
 * @property string|null $creado
 * @property string|null $editado
 *
 * @property Ciudad $ciudad0
 * @property ClienteEstado $clienteEstado
 * @property ClienteTipo $clienteTipo
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'dni', 'cuil', 'domicilio', 'ciudad', 'telefono', 'coreo', 'cliente_tipo', 'cliente_estado'], 'required'],
            [['dni', 'cuil', 'ciudad', 'cliente_tipo', 'cliente_estado'], 'integer'],
            [['creado', 'editado'], 'safe'],
            [['nombre', 'domicilio'], 'string', 'max' => 255],
            [['telefono'], 'string', 'max' => 20],
            [['coreo'], 'string', 'max' => 150],
            ['coreo', 'email'],
            [['ciudad'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['ciudad' => 'id']],
            [['cliente_estado'], 'exist', 'skipOnError' => true, 'targetClass' => ClienteEstado::className(), 'targetAttribute' => ['cliente_estado' => 'id']],
            [['cliente_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => ClienteTipo::className(), 'targetAttribute' => ['cliente_tipo' => 'id']],
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
            'dni' => 'Dni',
            'cuil' => 'Cuil',
            'domicilio' => 'Domicilio',
            'ciudad' => 'Ciudad',
            'telefono' => 'Telefono',
            'coreo' => 'Coreo',
            'cliente_tipo' => 'Cliente Tipo',
            'cliente_estado' => 'Cliente Estado',
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
     * Gets query for [[ClienteEstado]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClienteEstado()
    {
        return $this->hasOne(ClienteEstado::className(), ['id' => 'cliente_estado']);
    }

    /**
     * Gets query for [[ClienteTipo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClienteTipo()
    {
        return $this->hasOne(ClienteTipo::className(), ['id' => 'cliente_tipo']);
    }
}
