<?php

namespace backend\controllers;

class PublicController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

}
