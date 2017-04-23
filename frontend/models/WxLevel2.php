<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wx_level_2".
 *
 * @property integer $l_2_id
 * @property string $l_2_name
 * @property string $l_2_src
 */
class WxLevel2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wx_level_2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['l_2_id', 'l_2_name', 'l_2_src'], 'required'],
            [['l_2_id'], 'integer'],
            [['l_2_name'], 'string', 'max' => 255],
            [['l_2_src'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'l_2_id' => 'L 2 ID',
            'l_2_name' => 'L 2 Name',
            'l_2_src' => 'L 2 Src',
        ];
    }
}
