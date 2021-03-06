<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Office;

/**
 * OfficeSearch represents the model behind the search form of `common\models\Office`.
 */
class OfficeSearch extends Office
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_office', 'id_user', 'number', 'number_doc', 'count_places'], 'integer'],
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
        $query = Office::find();

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
            'id_office' => $this->id_office,
            'id_user' => $this->id_user,
            'number' => $this->number,
            'number_doc' => $this->number_doc,
            'count_places' => $this->count_places,
        ]);

        return $dataProvider;
    }
}
