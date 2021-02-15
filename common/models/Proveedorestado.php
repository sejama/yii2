<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "proveedor_estado".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 *
 * @property Proveedor[] $proveedors
 */
class Proveedorestado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proveedor_estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 100],
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
        ];
    }

    /**
     * Gets query for [[Proveedors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProveedors()
    {
        return $this->hasMany(Proveedor::className(), ['proveedor_estado' => 'id']);
    }
}
