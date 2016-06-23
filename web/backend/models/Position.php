<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property integer $id
 * @property string $position
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position' => 'Position',
        ];
    }
    /* author:张佩
     * models:select_type
     * meaning:员工职位的查询
     * creatime:2016年六月二十一号
     */
    public function select_type(){
        return Yii::$app->db->createCommand("select * from position")->queryAll();
    }
}
