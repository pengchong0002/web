<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "p_cian".
 *
 * @property integer $id
 * @property string $img
 * @property string $name
 * @property string $conter
 * @property integer $phone
 * @property string $position
 */
class PCian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'p_cian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'integer'],
            [['img'], 'string', 'max' => 57],
            [['name'], 'string', 'max' => 68],
            [['conter'], 'string', 'max' => 222],
            [['position'], 'string', 'max' => 60]
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
            'conter' => 'Conter',
            'phone' => 'Phone',
            'position' => 'Position',
        ];
    }
  /* author:胡一博
   * models:upload
   * meaning:员工头像的上传
   * integration:张佩
   * creatime:2016年六月二十一号
   */
    public function upload()
    {
        $this->img->saveAs('uploads/' . $this->img->baseName . '.' . $this->img->extension);
        return $this->img->name;
    }
  /* author:胡一博
   * models:uplode1
   * meaning:员工信息入库
   * integration:张佩
   * creatime:2016年六月二十一号
   */
    function uplode1($img, $name,$content,$phone,$position){
        $this->img=$img;
        $this->name=$name;
        $this->conter=$content;
        $this->phone=$phone;
        $this->position=$position;
        return $this->save();
    }
  /* author:张佩
   * models:work_delete
   * meaning:员工信息的删除
   * creatime:2016年六月二十一号
   */
    public function work_delete($id){
        return Yii::$app->db->createCommand("delete from p_cian where id='$id'")->execute();
    }
}
