<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pais".
 *
 * @property int $id
 * @property string $nombre
 * @property string $codigo
 */
class Pais extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pais';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'codigo'], 'required'],
            [['nombre'], 'string', 'max' => 50],
            [['codigo'], 'string', 'max' => 3],
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
            'codigo' => 'Código',
        ];
    }
}
