<?php

namespace frontend\controllers;
use frontend\models\Workers;

class IndexController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $cache=\Yii::$app->cache;
        $get=$cache->get('main');
        $model=new Workers();
        $info=$model->find()->orderBy('sort desc')->limit(3)->asArray()->all();
        return $this->render('index',['userinfo'=>$info]);
    }
    public function actionAbout()
    {
        return $this->render('about');
    }

}
