<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WxShopUser;

/**
 * WxShopUserSearch represents the model behind the search form about `app\models\WxShopUser`.
 */
class WxShopUserSearch extends WxShopUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 'u_login_times', 'u_able_points'], 'integer'],
            [['u_openid', 'u_wx_name', 'u_wx_phone', 'u_shop_name', 'u_birthday'], 'safe'],
            [['u_able_money'], 'number'],
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
        $query = WxShopUser::find();

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
            'u_id' => $this->u_id,
            'u_login_times' => $this->u_login_times,
            'u_able_money' => $this->u_able_money,
            'u_able_points' => $this->u_able_points,
        ]);

        $query->andFilterWhere(['like', 'u_openid', $this->u_openid])
            ->andFilterWhere(['like', 'u_wx_name', $this->u_wx_name])
            ->andFilterWhere(['like', 'u_wx_phone', $this->u_wx_phone])
            ->andFilterWhere(['like', 'u_shop_name', $this->u_shop_name])
            ->andFilterWhere(['like', 'u_birthday', $this->u_birthday]);

        return $dataProvider;
    }
}
