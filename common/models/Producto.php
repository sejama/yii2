<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 * @property string $creado
 * @property string|null $editado
 *
 * @property PresupuestoDetalle[] $presupuestoDetalles
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producto';
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
     * Gets query for [[PresupuestoDetalles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPresupuestoDetalles()
    {
        return $this->hasMany(PresupuestoDetalle::className(), ['producto' => 'id']);
    }
}
