<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ranchoganado;

/**
 * RanchoganadoSearch represents the model behind the search form of `app\models\Ranchoganado`.
 */
class RanchoganadoSearch extends Ranchoganado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRanchoGanado', 'ganado_capacidad', 'rancho', 'potrero', 'capacidad'], 'integer'],
              [['ubicacion'], 'string', 'max' => 50],
             [['encargado'], 'string', 'max' => 50],

        ];
    }

    /**
     * @inheritdoc
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
        $query = Ranchoganado::find();

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
            'idRanchoGanado' => $this->idRanchoGanado,
            'ganado_capacidad' => $this->ganado_capacidad,
            'rancho' => $this->rancho,
            'potrero' => $this->potrero,
            'ubicacion' => $this->ubicacion,
            'encargado' => $this->encargado,
            'capacidad' => $this->capacidad,
        ]);

        return $dataProvider;
    }
}
