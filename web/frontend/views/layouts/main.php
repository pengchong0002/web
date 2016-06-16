<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="text/javascript">
        jQuery(function(){
            jQuery('#camera_wrap_1').camera({
                thumbnails: true
            });
        });
    </script>
</head>

<?php $this->beginBody() ?>

<div class="header">
    <div class="header_top">
        <div class="wrap">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" /></a>
            </div>
            <div class="top-nav">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="staff.html">Staff</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <div class="header_bottom phone-slogan">
        <div class="wrap">
            <div class="header-phone">
                <h2><img src="images/phone.png" alt="" />1-234-567-8900</h2>
                <h4>Neque porro quisquam, dolor sit amet, USA.</h4>
                <span class="triangle-arrow">&nbsp;</span>
            </div>
            <div class="header-tagline">
                <h3><img src="images/clock.png" alt="" />时间 : <span>09.30 AM - 10.00PM</span></h3>
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
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
                        <li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
                        <li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
                        <li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
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
                <h3>Information</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><span><a href="#">Read More[....]</a></span></p>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h3>Testimonials</h3>
                <div class="Testimonials_desc">
                    <p><span class="up"><img src="images/quotes.png" alt=""></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<span class="down"><img src="images/quotes-down.png" alt=""></span></p>
                    <h5>- Lorem ipsum dolor</h5>
                </div>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h3>Contact Us</h3>
                <ul class="address">
                    <li>www.yourcompany(at)gmail.com</li>
                    <li><span>Mobile :</span> +12 345 67890</li>
                    <li><span>Telephone :</span> +00 000 00000</li>
                    <li><span>Fax :</span> +00 000 00000</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="wrap">
            <p class="company_name">Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>

<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
