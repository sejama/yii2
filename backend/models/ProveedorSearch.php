<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Proveedor;

/**
 * ProveedorSearch represents the model behind the search form of `common\models\Proveedor`.
 */
class ProveedorSearch extends Proveedor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'telefono', 'ciudad', 'proveedor_estado', 'proveedor_tipo'], 'integer'],
            [['nombre', 'razonsocial', 'correo', 'domicilio', 'creado', 'editado'], 'safe'],
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
        $query = Proveedor::find();

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
            'telefono' => $this->telefono,
            'ciudad' => $this->ciudad,
            'proveedor_estado' => $this->proveedor_estado,
            'proveedor_tipo' => $this->proveedor_tipo,
            'creado' => $this->creado,
            'editado' => $this->editado,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'razonsocial', $this->razonsocial])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'domicilio', $this->domicilio]);

        return $dataProvider;
    }
}
