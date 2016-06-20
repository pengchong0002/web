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
	})
</script>
		<div class="wrap">
		<div class="content">
			<div class="contact">
				<div class="project-top-patination">
								<ul>
									<li><a href="index.html">Mainpage</a></li>
									<li><p id="title">Contact</p></li>
								</ul>
							</div>
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   		baidu
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
				  	<h3>Contact Us</h3>
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


