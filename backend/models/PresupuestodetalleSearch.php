<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Presupuestodetalle;

/**
 * PresupuestodetalleSearch represents the model behind the search form of `common\models\Presupuestodetalle`.
 */
class PresupuestodetalleSearch extends Presupuestodetalle
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'presupuesto', 'producto', 'servicio', 'producto_cantidad', 'servicio_cantidad'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Presupuestodetalle::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'presupuesto' => $this->presupuesto,
            'producto' => $this->producto,
            'servicio' => $this->servicio,
            'producto_cantidad' => $this->producto_cantidad,
            'servicio_cantidad' => $this->servicio_cantidad,
        ]);

        return $dataProvider;
    }
}
