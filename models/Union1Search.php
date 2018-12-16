<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Union1;
use app\models\Pesaje;

/**
 * HistorialclinicoSearch represents the model behind the search form of `app\models\Historialclinico`.
 */
class Union1Search extends Union1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idHistorial', 'ganado', 'veterinario'], 'integer'],
            [['observacion', 'ultimaRevision'], 'safe'],
            [['peso'], 'number'],
            
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
    public function Union1search($params)
    {
        $query = Union1::find();

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
            'idHistorial' => $this->idHistorial,
            'ganado' => $this->ganado,
            'ultimaRevision' => $this->ultimaRevision,
            'veterinario' => $this->veterinario,
            'peso' => $this->peso,
          
        ]);

        $query->andFilterWhere(['like', 'observacion', $this->observacion]);

        return $dataProvider;
    }
}
