<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WxLevel1;

/**
 * WxLevel1Search represents the model behind the search form about `frontend\models\WxLevel1`.
 */
class WxLevel1Search extends WxLevel1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['l_id'], 'integer'],
            [['l_name', 'l_src'], 'safe'],
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
        $query = WxLevel1::find();

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
            'l_id' => $this->l_id,
        ]);

        $query->andFilterWhere(['like', 'l_name', $this->l_name])
            ->andFilterWhere(['like', 'l_src', $this->l_src]);

        return $dataProvider;
    }
}
