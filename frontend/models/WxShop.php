<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wx_shop".
 *
 * @property string $s_id
 * @property string $s_name
 * @property string $s_price
 * @property string $s_price_d
 * @property integer $s_stock
 * @property integer $s_format
 * @property string $s_f_pic
 * @property string $s_d_txt
 * @property string $s_d_pic
 * @property integer $s_1_level
 * @property integer $s_2_level
 */
class WxShop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wx_shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_id', 's_name', 's_price', 's_price_d', 's_stock', 's_format', 's_f_pic', 's_d_txt', 's_d_pic', 's_1_level', 's_2_level'], 'required'],
            [['s_price', 's_price_d'], 'number'],
            [['s_stock', 's_format', 's_1_level', 's_2_level'], 'integer'],
            [['s_id'], 'string', 'max' => 50],
            [['s_name', 's_f_pic', 's_d_txt'], 'string', 'max' => 255],
            [['s_d_pic'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'S ID',
            's_name' => 'S Name',
            's_price' => 'S Price',
            's_price_d' => 'S Price D',
            's_stock' => 'S Stock',
            's_format' => 'S Format',
            's_f_pic' => 'S F Pic',
            's_d_txt' => 'S D Txt',
            's_d_pic' => 'S D Pic',
            's_1_level' => 'S 1 Level',
            's_2_level' => 'S 2 Level',
        ];
    }
}
