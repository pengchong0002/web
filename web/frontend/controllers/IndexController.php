<?php

namespace frontend\controllers;

class IndexController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionCeshi()
    {
        echo 123;
    }

}
