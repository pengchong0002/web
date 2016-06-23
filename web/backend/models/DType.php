<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "d_type".
 *
 * @property integer $l_id
 * @property string $type_name
 */
class DType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'd_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'l_id' => 'L ID',
            'type_name' => 'Type Name',
        ];
    }
    /* author:张佩
     * models:selecttype
     * meaning:工作服务类型
     * times:2016/6/20整合
     */
    public function selecttype(){
        return Yii::$app->db->createCommand("select * from d_type")->queryAll();
    }

}
