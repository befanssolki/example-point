<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Stelag;

/**
 * StelagSearch represents the model behind the search form of `common\models\Stelag`.
 */
class StelagSearch extends Stelag
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_stelag', 'id_doc', 'number_stelag', 'number_polka'], 'integer'],
            [['lvl'], 'safe'],
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
        $query = Stelag::find();

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
            'id_stelag' => $this->id_stelag,
            'id_doc' => $this->id_doc,
            'number_stelag' => $this->number_stelag,
            'number_polka' => $this->number_polka,
        ]);

        $query->andFilterWhere(['like', 'lvl', $this->lvl]);

        return $dataProvider;
    }
}
