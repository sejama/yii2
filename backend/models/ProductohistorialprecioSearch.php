<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Productohistorialprecio;

/**
 * ProductohistorialprecioSearch represents the model behind the search form of `common\models\Productohistorialprecio`.
 */
class ProductohistorialprecioSearch extends Productohistorialprecio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'producto'], 'integer'],
            [['precio'], 'number'],
            [['inicio', 'fin'], 'safe'],
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
        $query = Productohistorialprecio::find();

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
            'precio' => $this->precio,
            'producto' => $this->producto,
            'inicio' => $this->inicio,
            'fin' => $this->fin,
        ]);

        return $dataProvider;
    }
}
