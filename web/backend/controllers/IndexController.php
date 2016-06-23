<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use backend\models\Brand;
use backend\models\DType;
use yii\web\UploadedFile;
use yii\data\Pagination;
header("content-type:text/html;charset=utf-8");
class IndexController extends \yii\web\Controller
{
    /* author:胡一博
     * controller:index
     * meaning:用户登录
     * integration:张佩
     *creatime:2016年六月二十七号
     */
    //取消form表单的csrf验证
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        if (Yii::$app->request->isPost) {
            $a=$_POST;
            $name=$a['name'];
            $password=$a['password'];
            $db=Yii::$app->db;
            $sql="select * from admin_user where name='$name' and password='$password'";
            $res=$db->createCommand($sql)->queryOne();
            if($res){
                $session = Yii::$app->session;
                $session->set('u_id',$res['password']);
                $session->set('u_name',$res['name']);
                return $this->render('index');
            }else{
                echo "<script>alert('用户名错误或密码错误！');location.href='index.php?r=public/index'</script>";
            }
        }
        return $this->render('index');
    }
    /* author:胡一博
     * controller:product
     * meaning:商品添加
     * integration:张佩
     *creatime:2016年六月十七号
     */
    public  function actionProduct(){
        $type = new DType();
        $typelist =$type->selecttype();
        $model = new Brand();
        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request;
            $get = $request->post();
            $model->img = UploadedFile::getInstance($model, 'img');
            $img=$model->upload();
            $arr1=  $model->uplode1($img,$get);
            if($arr1)
            {
                echo "<script>alert('产品添加成功');location.href='index.php?r=index/index'</script>";die;
            }
            else
            {
                echo "<script>alert('产品添加失败');location.href='index.php?r=index/index'</script>";
            }
        }
        return $this->render('upload', ['model' => $model,'typelist'=>$typelist ]);
    }
    /* author:胡一博
    * controller:productlist
    * meaning:商品列表
    * integration:张佩
    *creatime:2016年六月二十号
    */
    public function actionProductlist(){
        $query = Brand::find();
        $countQuery = clone $query;
        $pages = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)->all();
        return $this->render('showlist', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }
   /* author:胡一博
    * controller:edit_list
    * meaning:产品编辑
    * integration:张佩
    *creatime:2016年六月二十号
    */
    public function actionEdit_list(){
        $model= new Brand();
        $type = new DType();
        $typelist =$type->selecttype();
        $id=$_GET['id'];
        $db=Yii::$app->db;
        $sql="select * from brand where id='$id'";
        $res=$db->createCommand($sql)->queryAll();

        return $this->render('showlist1', [
            'res' => $res,'model'=>$model,'typelist'=>$typelist]);
    }
       /* author:胡一博
        * controller:edit_list2
        * meaning:产品编辑
        * integration:张佩
        *creatime:2016年六月二十号
        */
    public function actionEdit_list2(){
        $db=Yii::$app->db;
        $fen=$_POST;
        $name=$fen['name'];
        $id=$fen['id'];
        $content=$fen['content'];
        $fuction=$fen['fuction'];
        $state=$fen['state'];
        $price=$fen['price'];
        $type=$fen['type'];
        $sql="update brand set name='$name',content='$content',fuction='$fuction',state='$state',type='$type',price='$price' where id='$id'";
        $res=$db->createCommand($sql)->execute();
        $query = Brand::find();
        $countQuery = clone $query;
        $pages = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)

            ->all();
        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

     /* author:张佩
       * controller:del_list
       * meaning:产品编辑
       *creatime:2016年六月二十号
       */
    public function actionDel_list(){
        $id=$_GET['id'];
        $arr=Yii::$app->db->createCommand("delete from brand where id='$id'")->execute();
        if($arr){
            echo 1;
        }
    }
}
