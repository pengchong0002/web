<?php

namespace backend\models;

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
 * @property string $type
 * @property integer $price
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
            [['state', 'price'], 'integer'],
            [['img'], 'string', 'max' => 57],
            [['name'], 'string', 'max' => 68],
            [['content', 'fuction'], 'string', 'max' => 240],
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
            'img' => 'Image File',
            'name' => 'Name',
            'content' => 'Content',
            'fuction' => 'Fuction',
            'state' => 'State',
            'type' => 'Type',
            'price' => 'Price',
        ];
    }
    /*author:胡一博
    * models:upload
    * meaning:文件上传
    *times:2016/6/20整合
    */
    public function upload()
    {
        $this->img->saveAs('uploads/' . $this->img->baseName . '.' . $this->img->extension);
        return $this->img->name;
    }
    /*author:胡一博
     * models:uplode1
     * meaning:商品入库
     *times:2016/6/20整合
     */
    function uplode1($img,$get){
        $this->img=$img;
        $this->name=$get['name'];
        $this->content=$get['content'];
        $this->fuction=$get['fuction'];
        $this->state=$get['state'];
        $this->type=$get['type'];
        $this->price=$get['price'];
        return $this->save();
    }
}
