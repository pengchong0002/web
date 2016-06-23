<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "yue".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property integer $time
 * @property integer $w_id
 * @property string $email
 */
class Yue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time', 'w_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['phone', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'time' => 'Time',
            'w_id' => 'W ID',
            'email' => 'Email',
        ];
    }
}
