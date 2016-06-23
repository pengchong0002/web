<?php

namespace backend\models;

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
 * @property string $times
 * @property integer $sort
 * @property string $type
 * @property integer $is_show
 * @property integer $qq
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
            [['times'], 'safe'],
            [['sort', 'is_show', 'qq'], 'integer'],
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
            'is_show' => 'Is Show',
            'qq' => 'Qq',
        ];
    }
    /* author:张佩
 * models:upload
 * meaning:医生头像的上传
 *times:2016/6/20整合
 */
    public function upload()
    {
        $this->img->saveAs('upload/' . $this->img->baseName . '.' . $this->img->extension);
            return  $this->img->name;

    }
    /* author:张佩
     * models:add_list
     * meaning:医生添加信息的
     * times:2016/6/20整合
     */
    public function add_list($image,$arr){
        $name=$arr['name'];
        $img=$image;
        $work_li=$arr['work_li'];
        $work_jie=$arr['work_jie'];
        $price=$arr['price'];
        $times=$arr['times'];
        $sort=$arr['sort'];
        $type=$arr['type'];
        $qq=$arr['qq'];
        $is_show=$arr['is_show'];
        $db=\Yii::$app->db->createCommand();
        return $db->insert('workers', ['id'=>null,'name'=>$name,'img'=>$img,'work_li'=> $work_li,'work_jie'=>$work_jie,'price'=> $price,'times'=>$times,'sort'=>$sort,'type'=>$type,'is_show'=>$is_show,'qq'=>$qq])->execute();
    }
    /*author:张佩
     * models:selectedit
     * meaning:医生信息的编辑
     * times:2016/6/20整合
     */
    public function selectedit($id){
        return Yii::$app->db->createCommand("select * from workers where id='$id'")->queryOne();
    }
    /* author:张佩
     * models:update_list
     * meaning:医生信息的编辑
     * times:2016/6/20整合
     */
    public function update_list($arrlist){
        $id=$arrlist['id'];
        $name=$arrlist['name'];
        $work_li=$arrlist['work_li'];
        $work_jie=$arrlist['work_jie'];
        $price=$arrlist['price'];
        $times=$arrlist['times'];
        $sort=$arrlist['sort'];
        $type=$arrlist['type'];
        $qq=$arrlist['qq'];
        $is_show=$arrlist['is_show'];
        $db=\Yii::$app->db->createCommand();
        return $db->update('workers',['name'=>$name,'work_li'=>$work_li,'work_jie'=>$work_jie,'price'=>$price,'times'=>$times,'sort'=>$sort,'type'=>$type,'is_show'=>$is_show,'qq'=>$qq],"id=:id",
            [':id'=>$id])->execute();
    }
    /* author:张佩
     * models:detailsupdate
     * meaning:医生详情的编辑
     * times:2016/6/21整合
     */
    public function detailsupdate($id){
        return Yii::$app->db->createCommand("select id,work_li,work_jie from workers where id='$id'")->queryOne();
    }
  /* author:张佩
   * models:update_details
   * meaning:医生详情的编辑
   * times:2016/6/21整合
   */
    public function update_details($arrlist){
        $id=$arrlist['id'];
        $work_li=$arrlist['work_li'];
        $work_jie=$arrlist['work_jie'];
        $db=\Yii::$app->db->createCommand();
        return $db->update('workers',['work_li'=> $work_li,'work_jie'=>$work_jie,'work_jie'=>$work_jie],"id=:id",[':id'=>$id])->execute();
    }
     /* author:张佩
      * models:select_doctor
      * meaning:预约医生的查询
      * times:2016/6/21整合
      */
    public  function select_doctor(){
        return Yii::$app->db->createCommand("select id,name from workers")->queryAll();
    }
}
