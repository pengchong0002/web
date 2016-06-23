<?php

namespace backend\controllers;
use Yii;
use backend\models\Workers;
use backend\models\DType;
use yii\web\UploadedFile;
use  \yii\data\Pagination;
header("content-type:text/html;charset=utf-8");
class DoctorController extends \yii\web\Controller
{
    /* author:张佩
     * controller:index
     * meaning:医生添加
     * integration:张佩
     * createtime:2016年六月十九号
     */
    //取消form表单的csrf验证
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $type = new DType();
        $typelist =$type->selecttype();
        $model = new Workers();
        if (Yii::$app->request->isPost) {
            $model->img = UploadedFile::getInstance($model, 'img');
            $image=$model->upload();
            if (!empty($image)) {
                $request = Yii::$app->request;
                $arr = $request->post();
                $arr1 = $model->add_list($image,$arr);
              if($arr1){
                  echo "<script>alert('信息添加成功');location.href='index.php?r=doctor/showlist'</script>";
              }
            }
        }
        return $this->render('index', ['model' => $model,'typelist'=>$typelist]);
    }
    /* author:张佩
     * controller:show
     * meaning:医生列表的展示
     * integration:张佩
     * createtime:2016年六月二十号
     */
    public  function actionShowlist(){
        $query = Workers::find();
        $countQuery = clone $query;
        $pages = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)->all();
        return $this->render('show1', [
            'models' => $models,
            'pages' => $pages,
        ]);

    }
   /* author:张佩
    * controller:del_list
    * meaning:医生列表的删除
    * integration:张佩
    * createtime:2016年六月二十号
    */
    public function actionDel_list(){
        $id=$_GET['id'];
        $arr=Yii::$app->db->createCommand("delete from workers where id='$id'")->execute();
        if($arr){
            echo 1;
        }
    }
  /* author:张佩
   * controller:edit_list
   * meaning:医生列表的编辑
   * integration:张佩
   * createtime:2016年六月二十号
   */
    public function actionEdit_list(){
        $type = new DType();
        $model = new Workers();
        $id=$_GET['id'];
        $arr = $model->selectedit($id);
        $typelist =$type->selecttype();
        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request;
            $arrlist = $request->post();
            $arr = $model->update_list($arrlist);
            if($arr){
                echo "<script>alert('信息修改成功');location.href='index.php?r=doctor/showlist'</script>";
            }else{
                echo "<script>alert('信息修改成功');location.href='index.php?r=doctor/index'</script>";
            }
        }
        return $this->render('edit',['arr'=>$arr,'typelist'=>$typelist]);
    }
  /* author:张佩
   * controller:edit_list
   * meaning:医生详细内容
   * integration:张佩
   * createtime:2016年六月二十号
   */
  public function actionSelectmessage(){
      $id=$_GET['id'];
      $query = Workers::find()->where(['id' => $id]);
      $countQuery = clone $query;
      $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>3]);
      $models = $query->offset($pages->offset)
          ->limit($pages->limit)
          ->all();
      return $this->render('editlist', [
          'models' => $models,
          'pages' => $pages,
      ]);
  }
  /* author:张佩
   * controller:edit_details
   * meaning:医生详细内容的编辑
   * integration:张佩
   * createtime:2016年六月二十一号
   */
    public function actionEdit_details(){
        $id=$_GET['id'];
        $model=new Workers();
        $arr = $model->detailsupdate($id);
        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request;
            $arrlist = $request->post();
            $arr = $model->update_details($arrlist);
            if($arr){
                echo "<script>alert('详情信息修改成功');location.href='index.php?r=doctor/showlist'</script>";
            }
        }
        return $this->render('edit_details', [
            'arr' => $arr,
        ]);
    }


}
