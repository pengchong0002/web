<?php

namespace backend\controllers;

use Yii;
use backend\models\Yue;
use backend\models\Workers;
use yii\web\UploadedFile;
use  \yii\data\Pagination;

class YuelistController extends \yii\web\Controller
{
    /* author:张佩
     * controller:index
     * meaning:预约添加
     * createtime:2016年六月二十三号
     */
    public function actionIndex()
    {
        $model=new Workers();
        $doctor=$model->select_doctor();
        if (Yii::$app->request->isPost) {
            $liste=new Yue();
            $request = Yii::$app->request;
            $arr = $request->post();
            $arr1 = $liste->add_yue($arr);
            if($arr1){
                echo "<script>alert('预约信息添加成功');location.href='index.php?r=yuelist/showlist'</script>";
            }
        }
        return $this->render('index',['doctor'=>$doctor]);
    }
        /* author:张佩
         * controller:Showlist
         * meaning:预约的列表
         * createtime:2016年六月二十三号
         */
    public function actionShowlist(){
        $query = Yue::find();
        $countQuery = clone $query;
        $pages = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)->all();
        return $this->render('doctorlist', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }
        /* author:张佩
         * controller:index
         * meaning:预约列表的删除
         * createtime:2016年六月二十三号
         */
    public function actionDel_list(){
        $id=$_GET['id'];
        $arr=Yii::$app->db->createCommand("delete  from yue where id='$id'")->execute();
        if($arr){
            echo 1;
        }
    }

}
