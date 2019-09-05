<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Invitado;

/**
 * app\models\app\models\InvitadoSearch represents the model behind the search form about `app\models\Invitado`.
 */
class InvitadoSearch extends Invitado
{


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_boda', 'id_confirmacion', 'despues_doce', 'id_comida'], 'integer'],
            [['nombre', 'mensaje', 'comida_comentario', 'mesa_nombre'], 'safe'],
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
        $query = Invitado::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->getSort()->attributes['mesa_nombre'] = [
            'asc' => ['mesa.nombre' => SORT_ASC],
            'desc' => ['mesa.nombre' => SORT_DESC],
        ];
        $dataProvider->getSort()->attributes['id_confirmacion'] = [
            'asc' => ['invitado.id_confirmacion' => SORT_ASC],
            'desc' => ['invitado.id_confirmacion' => SORT_DESC],
        ];
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('mesaInvitado')->join('LEFT JOIN', 'mesa', 'mesa_invitado.id_mesa = mesa.id');

        $query->andFilterWhere([
            'id' => $this->id,
            'invitado.id_boda' => $this->id_boda,
            'invitado.id_confirmacion' => $this->id_confirmacion,
            'id_comida' => $this->id_comida,
            'despues_doce' => $this->despues_doce,
            'mesa.id' => $this->mesa_nombre,
        ]);

        $query->andFilterWhere(['like', 'invitado.nombre', $this->nombre])
            ->andFilterWhere(['like', 'mensaje', $this->mensaje])
            ->andFilterWhere(['like', 'comida_comentario', $this->comida_comentario]);
        //$query->orderBy(['nombre'=>SORT_ASC]);

        return $dataProvider;
    }
}
