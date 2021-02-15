<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ciudad".
 *
 * @property int $id
 * @property int $provincia
 * @property string $nombre
 * @property int $codigo_postal
 *
 * @property Provincia $provincia0
 * @property ParametroDato[] $parametroDatos
 */
class Ciudad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciudad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provincia', 'nombre', 'codigo_postal'], 'required'],
            [['provincia', 'codigo_postal'], 'integer'],
            [['nombre'], 'string', 'max' => 75],
            [['provincia'], 'exist', 'skipOnError' => true, 'targetClass' => Provincia::className(), 'targetAttribute' => ['provincia' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provincia' => 'Provincia',
            'nombre' => 'Nombre',
            'codigo_postal' => 'Codigo Postal',
        ];
    }

    /**
     * Gets query for [[Provincia0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvincia0()
    {
        return $this->hasOne(Provincia::className(), ['id' => 'provincia']);
    }

    /**
     * Gets query for [[ParametroDatos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParametroDatos()
    {
        return $this->hasMany(ParametroDato::className(), ['ciudad' => 'id']);
    }
}
