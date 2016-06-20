<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<script>
	$(document).ready(function(){
		$(".active").prop('class','');
		$("#n5").prop('class','active');
		var zhi=$("#n5").html();
		$("#title").html(zhi)
		//百度map
		var src="<?php echo Url::to('@web/images/bawei.jpg')?>";
		var sContent ="<h4 style='margin:0 0 5px 0;padding:0.2em 0'>八维保健店(上帝店)</h4>" +
			"<img style='float:right;margin:4px' id='imgDemo' src='"+src+"' width='56' height='34' title='天安门'/>" +
			"<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>八维保健店是有彭冲组员一起开发的八维保健品店这里能满足您的一切需求...</p>" +
			"</div>";;
		var map = new BMap.Map("l-map");
		var point = new BMap.Point(116.306358,40.049288);
		map.centerAndZoom(point, 20);
		var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
		map.openInfoWindow(infoWindow,point); //开启信息窗口
		document.getElementById("r-result").innerHTML = "八维保健店介绍：<br />" + infoWindow.getContent();
	})

	// 百度地图API功能

</script>
<style type="text/css">
	#allmap {width: 300px;height: 300px;font-family:"微软雅黑";font-size:14px;}
	#l-map{height:300px;width:300px;}
	#r-result{width:200px;}
</style>
		<div class="wrap">
		<div class="content">
			<div class="contact">
				<div class="project-top-patination">
								<ul>
									<li><a href="<?php echo Url::to(['index/index']);?>">Mainpage</a></li>
									<li><p id="title">Contact</p></li>
								</ul>
							</div>
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map" id="map">
								<div id="l-map"></div>
								<div id="r-result"></div>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info(at)mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>联系我们</h3>
                         <!--	  start-->
					  <?php $from=ActiveForm::begin(['action'=>Url::toRoute(['message_add']),'method'=>'post']);?>
<!--					    <form method="post" action="contact-post.html">-->
					    	<div>
						    	<span><label>姓名</label></span>
						    	<span><?php echo $from->field($model,'name',['labelOptions' => ['label' => '']])->textInput(['required oninvalid'=>"setCustomValidity('请输入您的名字！,必须是中文2-3汉字');",'oninput'=>"setCustomValidity('');",'pattern'=>'[\u4e00-\u9fa5]{2,6}'])?></span>
						    </div>
						    <div>
						    	<span><label>邮箱</label></span>
						    	<span><?php echo $from->field($model,'email',['labelOptions' => ['label' => '']])->input('email',['required oninvalid'=>"setCustomValidity('请输入您正确的邮箱!');",'oninput'=>"setCustomValidity('');"]) ?></span>
						    </div>
						    <div>
						     	<span><label>电话</label></span>
						    	<span><?php echo $from->field($model,'phone',['labelOptions' => ['label' => '']])->textInput(['required oninvalid'=>"setCustomValidity('请输入您正确的手机号!');",'oninput'=>"setCustomValidity('');",'pattern'=>'\d{10,11}']);?></span>
						    </div>
						    <div>
						    	<span><label>留言</label></span>
						    	<span><?php echo $from->field($model,'content',['labelOptions' => ['label' => '']])->textarea(['row'=>3,'required oninvalid'=>"setCustomValidity('请输入您的留言!');",'oninput'=>"setCustomValidity('');"]);?></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="mybutton" value="Submit"></span>
						  </div>
					  <?php ActiveForm::end();?>
<!--					    </form>-->
				    </div>
  				</div>				
			  </div>
			</div>
		 </div>
	   </div>


