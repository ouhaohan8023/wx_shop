<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wx_shop_user".
 *
 * @property integer $u_id
 * @property string $u_openid
 * @property string $u_wx_name
 * @property string $u_wx_phone
 * @property string $u_shop_name
 * @property string $u_birthday
 * @property integer $u_login_times
 * @property double $u_able_money
 * @property integer $u_able_points
 */
class WxShopUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wx_shop_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['u_openid', 'u_wx_name', 'u_wx_phone', 'u_shop_name', 'u_birthday', 'u_able_money', 'u_able_points'], 'required'],
            [['u_login_times', 'u_able_points'], 'integer'],
            [['u_able_money'], 'number'],
            [['u_openid', 'u_wx_name', 'u_shop_name'], 'string', 'max' => 255],
            [['u_wx_phone'], 'string', 'max' => 50],
            [['u_birthday'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_openid' => 'U Openid',
            'u_wx_name' => 'U Wx Name',
            'u_wx_phone' => 'U Wx Phone',
            'u_shop_name' => 'U Shop Name',
            'u_birthday' => 'U Birthday',
            'u_login_times' => 'U Login Times',
            'u_able_money' => 'U Able Money',
            'u_able_points' => 'U Able Points',
            'u_time' => '创建时间'
        ];
    }
}
