<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $content
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'string', 'max' => 60],
            [['phone'], 'string', 'max' => 30],
            [['content'], 'string', 'max' => 255]
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
            'email' => 'Email',
            'phone' => 'Phone',
            'content' => 'Content',
        ];
    }

    /*
     * 入库
     * */
    public function add_info($info)
    {
        $this->name=$info['name'];
        $this->email=$info['email'];
        $this->phone=$info['phone'];
        $this->content=$info['content'];
        $res=$this->save();
        return $res;
    }
}
