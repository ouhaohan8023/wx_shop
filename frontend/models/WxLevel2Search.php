<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WxLevel2;

/**
 * WxLevel2Search represents the model behind the search form about `app\models\WxLevel2`.
 */
class WxLevel2Search extends WxLevel2
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['l_2_id'], 'integer'],
            [['l_2_name', 'l_2_src'], 'safe'],
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
        $query = WxLevel2::find();

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
            'l_2_id' => $this->l_2_id,
        ]);

        $query->andFilterWhere(['like', 'l_2_name', $this->l_2_name])
            ->andFilterWhere(['like', 'l_2_src', $this->l_2_src]);

        return $dataProvider;
    }
}
