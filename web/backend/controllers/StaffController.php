<?php

namespace backend\controllers;

use Yii;
use backend\models\PCian;
use backend\models\position;
use backend\models\Brand;
use yii\web\UploadedFile;
use \yii\data\Pagination;
header("content-type:text/html;charset=utf-8");
class StaffController extends \yii\web\Controller
{
  /* author:胡一博
   * controller:index
   * meaning:添加员工
   * integration:张佩
   * creatime:2016年六月二十一号
   */
    public function actionIndex()
    {
            $model = new PCian();
            $position=new position();
            $typelist = $position->select_type();
        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request;
            $get = $request->post();
            $name = $get['name'];
            $content = $get['content'];
            $phone = $get['phone'];
            $position = $get['position'];
            $model->img = UploadedFile::getInstance($model, 'img');
            $img = $model->upload();
            $arr1 = $model->uplode1($img, $name,$content,$phone,$position);
            if ($arr1) {
                echo "<script>alert('员工信息添加成功');location.href='index.php?r=staff/showlist'</script>";die;
            } else {
                echo "<script>alert('员工信息添加失败')</script>";
            }
        }
        return $this->render('index', ['model' => $model,'typelist'=>$typelist]);
    }
  /* author:胡一博
   * controller:Showlist
   * meaning:员工显示列表
   * integration:张佩
   * creatime:2016年六月二十一号
   */
    public function actionShowlist(){
        $query = PCian::find();
        $countQuery = clone $query;
        $pages = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('showlist', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }
      /* author:胡一博
       * controller:Showlist
       * meaning:员工显示列表
       * integration:张佩
       * creatime:2016年六月二十一号
       */
    public function actionEdit_list(){
        $position=new position();
        $typelist = $position->select_type();
        $id=$_GET['id'];
        $db=Yii::$app->db;
        $sql="select * from p_cian where id='$id'";
        $res=$db->createCommand($sql)->queryOne();
        return $this->render('showlist1', ['res' => $res,'typelist'=>$typelist]);
    }
      /* author:胡一博
       * controller:Showlist
       * meaning:员工信息的编辑
       * integration:张佩
       * creatime:2016年六月二十一号
       */
    public function actionEdit_list2(){
        $db=Yii::$app->db;
        $fen=$_POST;
        $name=$fen['name'];
        $id=$fen['id'];
        $content=$fen['conter'];
        $phone=$fen['phone'];
        $position=$fen['position'];
        $sql="update p_cian set name='$name',conter='$content',phone='$phone',position='$position' where id='$id'";
        $res=$db->createCommand($sql)->execute();
        if ($res) {
            echo "<script>alert('员工信息修改成功');location.href='index.php?r=staff/showlist'</script>";die;
        } else {
            echo "<script>alert('员工信息修改失败');location.href='index.php?r=staff/index'</script>";
        }
    }
      /* author:胡一博
       * controller:Edit_delete
       * meaning:员工信息的删除
       * integration:张佩
       * creatime:2016年六月二十一号
       */
    public function actionEdit_delete(){
        $model = new PCian();
        $id=$_GET['id'];
        $arr=$model->work_delete($id);
        if($arr){
            echo 1;
        }

    }
}
