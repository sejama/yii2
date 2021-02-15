<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "presupuesto_detalle".
 *
 * @property int $id
 * @property int $presupuesto
 * @property int|null $producto
 * @property int|null $servicio
 * @property int|null $producto_cantidad
 * @property int|null $servicio_cantidad
 *
 * @property Presupuesto $presupuesto0
 * @property Producto $producto0
 * @property Servicio $servicio0
 */
class Presupuestodetalle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'presupuesto_detalle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['presupuesto'], 'required'],
            [['presupuesto', 'producto', 'servicio', 'producto_cantidad', 'servicio_cantidad'], 'integer'],
            [['presupuesto'], 'exist', 'skipOnError' => true, 'targetClass' => Presupuesto::className(), 'targetAttribute' => ['presupuesto' => 'id']],
            [['producto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['producto' => 'id']],
            [['servicio'], 'exist', 'skipOnError' => true, 'targetClass' => Servicio::className(), 'targetAttribute' => ['servicio' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'presupuesto' => 'Presupuesto',
            'producto' => 'Producto',
            'servicio' => 'Servicio',
            'producto_cantidad' => 'Producto Cantidad',
            'servicio_cantidad' => 'Servicio Cantidad',
        ];
    }

    /**
     * Gets query for [[Presupuesto0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPresupuesto0()
    {
        return $this->hasOne(Presupuesto::className(), ['id' => 'presupuesto']);
    }

    /**
     * Gets query for [[Producto0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducto0()
    {
        return $this->hasOne(Producto::className(), ['id' => 'producto']);
    }

    /**
     * Gets query for [[Servicio0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicio0()
    {
        return $this->hasOne(Servicio::className(), ['id' => 'servicio']);
    }
}
