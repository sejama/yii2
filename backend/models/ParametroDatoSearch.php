<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Parametrodato;

/**
 * ParametrodatoSearch represents the model behind the search form of `common\models\Parametrodato`.
 */
class ParametrodatoSearch extends Parametrodato
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sociedad', 'ciudad'], 'integer'],
            [['nombre_fiscal', 'nombre_fantasia', 'cuit', 'fecha_inicio', 'fecha_fin'], 'safe'],
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
        $query = Parametrodato::find();

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
            'sociedad' => $this->sociedad,
            'ciudad' => $this->ciudad,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
        ]);

        $query->andFilterWhere(['like', 'nombre_fiscal', $this->nombre_fiscal])
            ->andFilterWhere(['like', 'nombre_fantasia', $this->nombre_fantasia])
            ->andFilterWhere(['like', 'cuit', $this->cuit]);

        return $dataProvider;
    }
}
