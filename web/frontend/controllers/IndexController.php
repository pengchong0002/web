<?php

namespace frontend\controllers;
use frontend\models\Workers;
use yii\data\Pagination;
use frontend\models\Brand;
use frontend\models\Message;
use frontend\models\Yue;
use yii\helpers\Url;

class IndexController extends \yii\web\Controller
{
     public function beforeAction($action)
     {
         define('CACHT_TIME',24*60*60);  //设置缓存时间
         define('CACHT_ON','false');    //设置是否开启缓存
         define('ZFB_URL','http://www.web.com/web/web/frontend/web/index/pay_recived');    //设置支付就扣回调地址
         return parent::beforeAction($action); // TODO: Change the autogenerated stub
     }

    public function actionIndex()
    {
        $cache=\Yii::$app->cache;
        $get=$cache->get('main');
        $model=new Workers();
        $model1=new Brand();
        if(CACHT_ON=='true')
        {
            if($get)
            {  //存在
                if(time()-$get['time']>=CACHT_TIME)
                {  //过期了
                    $info=$model->find()->where('is_show=0')->orderBy('sort desc')->limit(3)->asArray()->all();
                    $info1=$model1->find()->where('state=1')->limit(4)->asArray()->all();
                    $data['data']=$this->render('index',['userinfo'=>$info,'brand'=>$info1]);
                    $data['time']=time();
                    $cache->set('main',$data,CACHT_TIME);
                    echo $data['data'];die;
                } //没过期
                echo $get['data'];
            }else
            {//不存在
                $info=$model->find()->where('is_show=0')->orderBy('sort desc')->limit(3)->asArray()->all();
                $info1=$model1->find()->where('state=1')->limit(4)->asArray()->all();
                $data['time']=time();
                $data['data']=$this->render('index',['userinfo'=>$info,'brand'=>$info1]);
                $cache->set('main',$data,CACHT_TIME);
                echo $data['data'];
            }
        }else
        {
            $info=$model->find()->where('is_show=0')->orderBy('sort desc')->limit(3)->asArray()->all();
            $info1=$model1->find()->where('state=1')->limit(4)->asArray()->all();
            return $this->render('index',['userinfo'=>$info,'brand'=>$info1]);
        }
    }
    /**
     * 关于我们
     * about
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    /**
     * 清除缓存(后台调用)
     * delete
     */
    public function actionDelete()
    {
        $chache=\Yii::$app->cache;
        $chache->delete('main');
    }
    /**
     * 工作人员
     * staff
     */
    public function actionStaff()
    {
        $model=new Workers();
        $data = $model->find()->where('is_show=0');
        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '6']);
        $info = $data->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('staff',['info' => $info,'pages' => $pages]);
    }

    /*
     * 预约
     * */
    public function actionYue()
    {
         $w_id=\Yii::$app->request->get('id');
         $model=new Workers();
         $res=$model->find($w_id)->asArray()->one();
         return $this->render('yue',['info'=>$res]);
    }

    /*
     * 预约入库
     * */
    public function actionYue_add()
    {
        $model=new Yue();
        $model->name=\Yii::$app->request->post('name');
        $model->email=\Yii::$app->request->post('email');
        $model->phone=\Yii::$app->request->post('phone');
        $time=\Yii::$app->request->post('time');
        $model->time=strtotime($time);
        $model->w_id=\Yii::$app->request->post('w_id');
        if($model->save())
        {
            $web=Url::to(['index/index']);
            echo "<script>alert('预约成功,请及时到达O(∩_∩)O');location.href='$web'</script>";
        }else
        {
           echo "<script>alert('预约失败!');history.ho(-1)</script>";
        }
    }
    /**
     * 联系我们
     * contact
     */
    public function actionContact()
    {
        $model=new Message();
        return $this->render('contact',['model'=>$model]);
    }

    /*
     * 联系方式入库
     * */
    public function actionMessage_add()
    {
        $model=new Message();
        $info=\Yii::$app->request->post('Message');
        $res=$model->add_info($info);
        if($res)
        {
            return $this->render('ing');die;
        }else
        {
            echo "<script>alert('提交失败!'); history.go(-1)</script>";
        }
    }
     /*
      * 服务
      * */
    public function actionServices()
    {
        return $this->render('services');
    }
    /*
     * 产品界面
     * */
    public function actionBrand_more()
    {
        $model=new Brand();
        $data = $model->find();
        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '6']);
        $info = $data->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('brand',['info' => $info,'pages' => $pages]);

    }

    /*
     * 商品详情页
     * */
    public function actionBrand_info()
    {
        $id=\Yii::$app->request->get('id');
        $model=new Brand();
        $res=$model->find()->where('id='.$id)->asArray()->one();
        return $this->render('brand_info',['info'=>$res]);

    }


    /*
     * 详细信息
     * */
    public function actionMore()
    {
        $id=\Yii::$app->request->get('id');
        $model=new Workers();
        $res=$model->find()->where('id='.$id)->asArray()->one();
        return $this->render('info',['info'=>$res]);
    }



    /*
     * 付款页面
     * */
    public function actionPay_view()
    {
        return $this->render('pay_view');
    }


  /*
   * 付款
   * */
    public function actionPay()
    {
        $money=\Yii::$app->request->post('money');
        $card_id=time();
       $this->zfb($money,$card_id,ZFB_URL);
    }



    /*
     * 支付宝接口
     * */
    private function zfb($money,$card_id,$redirect_url)
    {

        $alipay_config['partner']  = '2088002075883504';
        $alipay_config['seller_email']	= 'li1209@126.com';
        $alipay_config['key']  = 'y8z1t3vey08bgkzlw78u9cbc4pizy2sj';
        $alipay_config['sign_type'] = strtoupper('MD5');
        $alipay_config['cacert']    = getcwd().'\\cacert.pem';
        $alipay_config['transport']    = 'http';
        $parameter = array(
            "service" => "create_direct_pay_by_user",
            "partner" => $alipay_config['partner'], // 合作身份者id
            "seller_email" => $alipay_config['seller_email'], // 收款支付宝账号
            "payment_type"	=> '1', // 支付类型
            "notify_url"	=>
                "http://www.xuexi.com/tenmonth/week2_exam/frontend/web/index.php?r=index/notify", // 服务器异步

            "return_url"	=>$redirect_url, // 页面跳转同

            "out_trade_no"	=>$card_id, // 商户网站订单系统中唯一订单号
            "subject"	=> "订单1", // 订单名称
            "total_fee"	=> $money, // 付款总金额
            "body"	=> "", // 订单描述 可选
            "show_url"	=> "", // 商品展示地址 可选
            "anti_phishing_key"	=> "", // 防钓鱼时间戳  若要使用请调用类文件submit中的
            "exter_invoke_ip"	=> "", // 客户端的IP地址
            "_input_charset"	=> 'utf-8', // 字符编码格式
        );
        // 去除值为空的参数
        foreach ($parameter as $k => $v) {
            if (empty($v)) {
                unset($parameter[$k]);
            }
        }
        // 参数排序
        ksort($parameter);
        reset($parameter);
        // 拼接获得sign
        $str = "";
        foreach ($parameter as $k => $v) {
            if (empty($str)) {
                $str .= $k . "=" . $v;
            } else {
                $str .= "&" . $k . "=" . $v;
            }
        }
        $parameter['sign'] = md5($str . $alipay_config['key']);
        $parameter['sign_type'] = $alipay_config['sign_type'];
        // **********************请求参数拼接 end*****************************

        // ****************************模拟请求 start*****************************
        $sHtml = "<form id='alipaysubmit' name='alipaysubmit'
action='https://mapi.alipay.com/gateway.do?_input_charset=utf-8' method='get'>";
        foreach ($parameter as $k => $v) {
            $sHtml.= "<input type='hidden' name='" . $k . "' value='" . $v . "'/>";
        }
        $sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";
        // ****************************模拟请求

        echo $sHtml;

    }

    public function actionPay_recived()
    {
        echo 'OK';
    }


}
