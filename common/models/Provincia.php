<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "provincia".
 *
 * @property int $id
 * @property string $nombre
 * @property int $pais
 *
 * @property Pais $pais0
 */
class Provincia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provincia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'pais'], 'required'],
            [['pais'], 'integer'],
            [['nombre'], 'string', 'max' => 75],
            [['pais'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['pais' => 'id']],
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
            'pais' => 'País',
        ];
    }

    /**
     * Gets query for [[Pais0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPais0()
    {
        return $this->hasOne(Pais::className(), ['id' => 'pais']);
    }
}
