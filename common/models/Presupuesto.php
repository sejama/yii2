<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "presupuesto".
 *
 * @property int $id
 * @property int $cliente
 * @property string $creado
 * @property string|null $editado
 * @property string|null $vencimiento
 *
 * @property Cliente $cliente0
 * @property PresupuestoDetalle[] $presupuestoDetalles
 */
class Presupuesto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'presupuesto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cliente', 'creado'], 'required'],
            [['cliente'], 'integer'],
            [['creado', 'editado', 'vencimiento'], 'safe'],
            [['cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['cliente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cliente' => 'Cliente',
            'creado' => 'Creado',
            'editado' => 'Editado',
            'vencimiento' => 'Vencimiento',
        ];
    }

    /**
     * Gets query for [[Cliente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente0()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'cliente']);
    }

    /**
     * Gets query for [[PresupuestoDetalles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPresupuestoDetalles()
    {
        return $this->hasMany(PresupuestoDetalle::className(), ['presupuesto' => 'id']);
    }
}
