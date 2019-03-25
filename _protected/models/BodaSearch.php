<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Boda;

/**
 * app\models\BodaSearch represents the model behind the search form about `app\models\Boda`.
 */
 class BodaSearch extends Boda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_novio', 'id_novia'], 'integer'],
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
        $query = Boda::find();

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
            'id_novio' => $this->id_novio,
            'id_novia' => $this->id_novia,
        ]);

        return $dataProvider;
    }
}
