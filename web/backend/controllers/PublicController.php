<?php

namespace backend\controllers;

use Yii;
class PublicController extends \yii\web\Controller
{
		/* author:张佩
		* controller:public
		* meaning:后台登录界面
		*creatime:2016年六月二十七号
		*/
	    public function actionIndex()
	    {
	        return $this->renderPartial('login');
	    }
		/* author:张佩
		* controller:public
		* meaning:管理员退出
		* creatime:2016年六月十七号
		*/
		public function actionQuit()
		{
			unset(yii::$app->session['u_name']);
			return $this->renderPartial('login');
		}

   

}
