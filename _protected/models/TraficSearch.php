<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trafic;

/**
 * app\models\TraficSearch represents the model behind the search form about `app\models\Trafic`.
 */
 class TraficSearch extends Trafic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_boda', 'id_invitado'], 'integer'],
            [['telefono'], 'safe'],
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
        $query = Trafic::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_boda' => $this->id_boda,
            'id_invitado' => $this->id_invitado,
        ]);

        $query->andFilterWhere(['like', 'telefono', $this->telefono]);

        return $dataProvider;
    }
}
