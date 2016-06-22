<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;
//use yii\widgets\ActiveForm;
AppAsset::addcss($this,'@web/date/jquery-ui.css');
AppAsset::addscript($this,'@web/date/jquery-ui.js');
?>
<script>
	$(document).ready(function(){
		$("#start").datepicker({
			changeYear: true,
			showButtonPanel: false,
			dateFormat: 'yy/mm/dd',
			minDate : new Date(),
			defaultDate:new Date(),
//			onSelect:function(dateText,inst){
//				$('#start').datepicker('option', 'minDate', new Date());
//				$('#start').datepicker({ dateFormat: 'yy-mm-dd' });
//				var dateFormat = $('#start').datepicker('option', 'dateFormat');
//				$('#start').datepicker('option', 'dateFormat', 'yy-mm-dd');
//			}
		});
	});

</script>

		<!---start-content---->
		<div class="wrap">
		<div class="content">
			<div class="contact">
				<div class="project-top-patination">
								<ul>
									<li><a href="<?php echo Url::to(['index/index']);?>">Mainpage</a></li>
									<li><p>预约</p></li>
								</ul>
							</div>
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3></h3>
			    	 		<div class="map">

					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3></h3>

						   		<p><?php echo $info['jie'];?></p>
				   		<p>Phone:13141234774</p>
				   		<p>	QQ:2494032383</p>
				 	 	<p>邮箱: <span>2494032383@qq.com</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>预约 <?php echo $info['name'];?>技师
					&nbsp;&nbsp;&nbsp;
						<img src="<?php echo Url::to('@web/images/').$info['img']?>" width="70" height="40" style="float: right;margin-right: 400px" alt="">
					</h3>
<!--					  --><?php //$from=ActiveForm::begin(['action'=>Url::toRoute(['yue_add']),'method'=>'post']);?>
					  <form action="<?php echo Url::toRoute('yue_add')?>" method="post">
					    	<div>
								<input type="text" style="display: none" name="_csrf" value="<?php echo Yii::$app->request->getCsrfToken();?>">
						    	<span><label>您的名称</label></span>
						    	<span><input name="name" type="text" pattern='[\u4e00-\u9fa5]{2,6}' class="textbox" required oninvalid="setCustomValidity('请填写您正确的名称(必须是汉字)！');" oninput="setCustomValidity('');"></span>
						    </div>
						    <div>
						    	<span><label>您的邮箱</label></span>
						    	<span><input name="email" type="email" class="textbox" required oninvalid="setCustomValidity('请填写您正确的邮箱！');" oninput="setCustomValidity('');"></span>
						    </div>
						    <div>
						     	<span><label>您的电话</label></span>
						    	<span><input name="phone" type="text" pattern='\d{10,11}' class="textbox" required oninvalid="setCustomValidity('请填写您正确的手机号码！');" oninput="setCustomValidity('');" ></span>
						    </div>
							<div>
								<span><label>预约时间</label></span>
								<span>
									<input type="text" name='time'  id="start" required="true"  >
									<input type="text" name="w_id" value="<?php echo $info['id'];?>" style="display: none;">
									</span>
							</div>
						   <div>
						   		<span><input type="submit" class="mybutton" value="确认预约"></span>
						  </div>
					  </form>
<!--					  --><?php //ActiveForm::end();?>
				    </div>
  				</div>				
			  </div>
			</div>
		 </div>
	   </div>
