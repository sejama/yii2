<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form of `common\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dni', 'cuil', 'ciudad', 'cliente_tipo', 'cliente_estado'], 'integer'],
            [['nombre', 'domicilio', 'telefono', 'coreo', 'creado', 'editado'], 'safe'],
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
        $query = Cliente::find();

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
            'dni' => $this->dni,
            'cuil' => $this->cuil,
            'ciudad' => $this->ciudad,
            'cliente_tipo' => $this->cliente_tipo,
            'cliente_estado' => $this->cliente_estado,
            'creado' => $this->creado,
            'editado' => $this->editado,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'domicilio', $this->domicilio])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'coreo', $this->coreo]);

        return $dataProvider;
    }
}
