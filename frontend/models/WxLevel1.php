<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wx_level_1".
 *
 * @property integer $l_id
 * @property string $l_name
 * @property string $l_src
 */
class WxLevel1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wx_level_1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['l_id', 'l_name', 'l_src'], 'required'],
            [['l_id'], 'integer'],
            [['l_name'], 'string', 'max' => 255],
            [['l_src'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'l_id' => 'L ID',
            'l_name' => 'L Name',
            'l_src' => 'L Src',
        ];
    }
}
