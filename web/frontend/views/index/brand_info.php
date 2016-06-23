<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<div class="project-top-patination">
    <ul>
        <li><a href="<?php echo Url::to(['index/index']);?>">Mainpage</a></li>
        <li><p><?php echo $info['name'];?>技师</p></li>
    </ul>
</div>
<center>
    <img src="<?php echo Url::to('@web/images/'.$info['img']);?>" height="300" width="300" alt="">
    <div class="contact-form" >
        <h3><?php echo $info['name'];?>商品详情</h3>
            <div>
                <span><label>产品名</label></span>
                <span><input name="userName" type="text" style="text-align: center" value="<?php echo $info['name'];?>" disabled="true" class="textbox"></span>
            </div>
            <div>
                <span><label>功效</label></span>
                <span><input name="userEmail" type="text" style="text-align: center" value="<?php echo $info['fuction'];?>" class="textbox"></span>
            </div>
        <div>
            <span><label>类型</label></span>
            <span><input name="type" type="text" style="text-align: center" disabled="true" value="<?php echo $info['type'];?>" class="textbox"></span>
        </div>
            <div>
                <span><label>价格</label></span>
                <span><input name="userPhone" type="text" style="text-align: center" value="<?php echo $info['price'];?>$" class="textbox"></span>
            </div>

            <div>
                <span>
                    <a  href="<?php echo Url::toRoute('brand_more');?>">
                    <input type="button" class="mybutton" value="返回"></a></span>
            </div>

    </div>
</center>