<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "workers".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $work_li
 * @property string $work_jie
 * @property string $price
 * @property integer $times
 * @property integer $sort
 * @property string $type
 */
class Workers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['times', 'sort'], 'integer'],
            [['name'], 'string', 'max' => 68],
            [['img'], 'string', 'max' => 57],
            [['work_li', 'work_jie'], 'string', 'max' => 240],
            [['type'], 'string', 'max' => 255]
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
            'img' => 'Img',
            'work_li' => 'Work Li',
            'work_jie' => 'Work Jie',
            'price' => 'Price',
            'times' => 'Times',
            'sort' => 'Sort',
            'type' => 'Type',
        ];
    }
}
