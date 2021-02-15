<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "servicio_historial_precio".
 *
 * @property int $id
 * @property int $servicio
 * @property string $inicio
 * @property string|null $fin
 * @property float $precio
 *
 * @property Servicio $servicio0
 */
class Serviciohistorialprecio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicio_historial_precio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['servicio', 'inicio', 'precio'], 'required'],
            [['servicio'], 'integer'],
            [['inicio', 'fin'], 'safe'],
            [['precio'], 'number'],
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
            'servicio' => 'Servicio',
            'inicio' => 'Inicio',
            'fin' => 'Fin',
            'precio' => 'Precio',
        ];
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
