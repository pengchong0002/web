<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property integer $id
 * @property string $img
 * @property string $name
 * @property string $content
 * @property string $fuction
 * @property integer $state
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state'], 'integer'],
            [['img'], 'string', 'max' => 57],
            [['name'], 'string', 'max' => 68],
            [['content', 'fuction'], 'string', 'max' => 240]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'name' => 'Name',
            'content' => 'Content',
            'fuction' => 'Fuction',
            'state' => 'State',
        ];
    }
}
