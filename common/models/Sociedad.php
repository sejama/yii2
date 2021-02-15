<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sociedad".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 *
 * @property ParametroDato[] $parametroDatos
 */
class Sociedad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sociedad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre', 'descripcion'], 'string', 'max' => 255],
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
     * Gets query for [[ParametroDatos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParametroDatos()
    {
        return $this->hasMany(ParametroDato::className(), ['sociedad' => 'id']);
    }
}
