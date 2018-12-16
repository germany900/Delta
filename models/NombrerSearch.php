<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nombrer;

/**
 * EstatusSearch represents the model behind the search form of `app\models\Estatus`.
 */
class EstatusSearch extends Estatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idNombreR'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
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
        $query = Nombrer::find();

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
            'idNombreR' => $this->idNombreR,
        ]);

        $query->andFilterWhere(['like', 'descrip', $this->descrip]);

        return $dataProvider;
    }
}
