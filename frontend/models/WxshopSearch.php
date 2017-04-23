<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * WxshopSearch represents the model behind the search form about `app\models\Wxshop`.
 */
class WxshopSearch extends \app\models\WxShop
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_id', 's_name', 's_f_pic', 's_d_txt', 's_d_pic'], 'safe'],
            [['s_price', 's_price_d'], 'number'],
            [['s_stock', 's_format', 's_1_level', 's_2_level'], 'integer'],
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
        $query = Wxshop::find();

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
            's_price' => $this->s_price,
            's_price_d' => $this->s_price_d,
            's_stock' => $this->s_stock,
            's_format' => $this->s_format,
            's_1_level' => $this->s_1_level,
            's_2_level' => $this->s_2_level,
        ]);

        $query->andFilterWhere(['like', 's_id', $this->s_id])
            ->andFilterWhere(['like', 's_name', $this->s_name])
            ->andFilterWhere(['like', 's_f_pic', $this->s_f_pic])
            ->andFilterWhere(['like', 's_d_txt', $this->s_d_txt])
            ->andFilterWhere(['like', 's_d_pic', $this->s_d_pic]);

        return $dataProvider;
    }
}
