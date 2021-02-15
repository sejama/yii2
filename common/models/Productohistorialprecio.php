<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producto_historial_precio".
 *
 * @property int $id
 * @property float $precio
 * @property int $producto
 * @property string $inicio
 * @property string|null $fin
 *
 * @property Producto $producto0
 */
class productohistorialprecio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producto_historial_precio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['precio', 'producto', 'inicio'], 'required'],
            [['precio'], 'number'],
            [['producto'], 'integer'],
            [['inicio', 'fin'], 'safe'],
            [['producto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['producto' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'precio' => 'Precio',
            'producto' => 'Producto',
            'inicio' => 'Inicio',
            'fin' => 'Fin',
        ];
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
}
