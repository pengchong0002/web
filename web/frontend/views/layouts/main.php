<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=E79oK4TMH0VGGshgQyZuIcI0YXBIF20n"></script>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<?php $this->beginBody() ?>
<div class="header">
    <div class="header_top">
        <div class="wrap">
            <div class="logo">
                <a href="<?php echo Url::to(['index']);?>"><img src="<?php echo Url::to('@web/images/logo.png');?>" /></a>
            </div>
            <div class="top-nav">
                <ul>
                    <li id="n1"><a href="<?php echo Url::to(['index/index']);?>">首页</a></li>
                    <li id="n2" ><a href="<?php echo Url::to(['index/about']);?>">关于我们</a></li>
                    <li id="n3"><a href="<?php echo Url::to(['index/staff']);?>">工作人员</a></li>
                    <li id="n4"><a href="<?php echo Url::to(['index/services']);?>">服务</a></li>
                    <li id="n5" ><a href="<?php echo Url::to(['index/contact']);?>">联系我们</a></li>
                </ul>
            </div>
            <div class="clear"> </div>
        </div>
    </div>

    <div class="header_bottom phone-slogan">
        <div class="wrap">
            <div class="header-phone">
                <h2><img src="<?php echo Url::to('@web/images/logo.png');?>" alt="" />13263351424</h2>
                <h4>Beijing HaiDian BaWei, China</h4>
                <span class="triangle-arrow">&nbsp;</span>
            </div>
            <div class="header-tagline">
                <h3><img src="<?php echo Url::to('@web/images/clock.png');?>" alt="" />时间 : <span>09.30 AM - 10.00PM</span></h3>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>


<!---Footer---->
<div class="footer">
    <div class="wrap">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h3>跟着我们</h3>
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><img src="<?php echo Url::to('@web/images/facebook.png');?>" title="facebook"></a></li>
                        <li><a href="#"><img src="<?php echo Url::to('@web/images/twitter.png');?>" title="Twiiter"></a></li>
                        <li><a href="#"><img src="<?php echo Url::to('@web/images/rss.png');?>" title="Rss"></a></li>
                        <li><a href="#"><img src="<?php echo Url::to('@web/images/gpluse.png');?>" title="Google+"></a></li>
                    </ul>
                </div>
                <div class="location">
                    <h3>Location</h3>
                    <ul>
                        <li>1-22-003-55,</li>
                        <li>Neque porro quisquam,</li>
                        <li>dolor sit amet,</li>
                        <li>USA.</li>
                    </ul>
                </div>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h3>询问</h3>
                <p>我们的机构都是一对一的服务你可以在这里寻找你喜欢或者想要的技师,而且不会担心自己的隐私问题,我们的技师都是经过培训出来的，保证每位客人心里和身体上双重的享受.<br><span><a href="#">Read More[....]</a></span></p>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h3>推荐</h3>
                <div class="Testimonials_desc">
                    <p><span class="up"><img src="<?php echo Url::to('@web/images/quotes.png');?>" alt=""></span>乳腺出现增生，经前乳腺的胀痛明显增加。乳腺属于肝经循行路线上的要塞，一旦肝经中有“毒”存在，乳腺增生随即产生，尤其在经血即将排出时，会因气血的充盛而变得胀痛明显。.<span class="down"><img src="<?php echo Url::to('@web/images/quotes-down.png');?>" alt=""></span></p>
                    <h5>- Lorem ipsum dolor</h5>
                </div>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h3>联系我们</h3>
                <ul class="address">
                    <li>www.2494032383@qq.com</li>
                    <li><span>Mobile :</span> 13263351424</li>
                    <li><span>Telephone :</span> 3781-5681-321</li>
                    <li><span>QQ :</span> 2494032383</li>
                    <li><span>赞助 :

                        </span>
                        <a target="_blank" href="<?php echo Url::to('pay_view')?>">
                        <img src="<?php echo Url::to('@web/images/zfb.jpg')?>" height="30" width="30" style="margin-left: 30px;" alt="支付宝转账">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="wrap">
            <p class="company_name">Copyright &copy; 2014.Company name All rights reserved</p>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>

<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
