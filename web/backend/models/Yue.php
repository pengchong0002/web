<?php

namespace backend\models;

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
        /* author:张佩
         * models:add_yue
         * meaning:预约医生的入库
         * times:2016/6/23整合
         */
    public function add_yue($arr){
        $name=$arr['name'];
        $phone=$arr['phone'];
        $time=strtotime($arr['time']);
        $w_id=$arr['w_id'];
        $email=$arr['email'];
        $db=\Yii::$app->db->createCommand();
        return $db->insert('yue', ['id'=>null,'name'=>$name,'phone'=>$phone,'time'=> $time,'w_id'=>$w_id,'email'=> $email])->execute();
    }
}
