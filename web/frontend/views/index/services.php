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
		$("#n4").prop('class','active');
		var zhi=$("#n4").html();
		$("#title").html(zhi)
	})
</script>
	<!---End-header--->
    <div class="content">
    	 <div class="wrap">
    	 	<div class="project-top-patination">
								<ul>
									<li><a href="<?php echo Url::to(['index/index']);?>">Mainpage</a></li>
									<li><p>服务</p></li>
								</ul>
							</div>
    	 	<div class="services">
				<div class="section group">
				  <div class="col_1_of_4 span_1_of_4">
					<h3><span>身体</span><br>保健</h3>
							<div class="services_list">
			          			<ul>
				                   <li><a href="">Always free from repetition</a></li>
				                    <li><a href="">Always free from repetition</a></li>
				                    <li><a href="">The standard chunk of Lorem</a></li>
				                    <li><a href="">The standard chunk of Lorem</a></li>
				                    <li><a href="">Always free from repetition</a></li>
				                </ul>
			          		</div>
			  		   </div>
				<div class="col_1_of_4 span_1_of_4">
					<h3><span>面部</span><br>治疗</h3>
							<div class="services_list">
								<ul>
				                   <li><a href="">Always free from repetition</a></li>
				                    <li><a href="">Always free from repetition</a></li>
				                    <li><a href="">The standard chunk of Lorem</a></li>
				                    <li><a href="">The standard chunk of Lorem</a></li>
				                    <li><a href="">Always free from repetition</a></li>
				                </ul>
							</div>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3><span>头发</span><br>护理</h3>
							<div class="services_list">
			          			<ul>
			          				<li><a href="">The standard chunk of Lorem</a></li>
				                    <li><a href="">The standard chunk of Lorem</a></li>
				                   <li><a href="">Always free from repetition</a></li>
				                    <li><a href="">Always free from repetition</a></li>	
				                     <li><a href="">The standard chunk of Lorem</a></li>			                    
				                </ul>
			          		</div>
						</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3><span>皮肤</span><br>保养</h3>
					   <div class="services_list">
								<ul>
				                   <li><a href="">Always free from repetition</a></li>
				                    <li><a href="">Always free from repetition</a></li>
				                    <li><a href="">The standard chunk of Lorem</a></li>
				                    <li><a href="">The standard chunk of Lorem</a></li>
				                    <li><a href="">Always free from repetition</a></li>
				                </ul>
							</div>
					</div>
	            </div>
	            <div class="section group example">
				<div class="col_1_of_2 span_1_of_2">
				   <h3>身体的保养</h3>
				   <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua sed do eiusmod tempor.</span></p>
 				       <h4><span>2013</span>- sed do eiusmod tempor</h4>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
 				    <h4><span>2010</span>- sed do eiusmod tempor</h4>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
 				    <h4><span>2008</span>- sed do eiusmod tempor</h4>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
 				       <h4><span>2005</span>- sed do eiusmod tempor</h4>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
 				      <h4><span>2002</span>- sed do eiusmod tempor</h4>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
 				</div>
				<div class="col_1_of_2 span_1_of_2">
				   <h3>头发的护理</h3>
				   <div class="hair_treatment">
						<div class="treatment_img">
							<img src="images/hairimg1.jpg" alt="">
						</div>
						<div class="treatment-desc">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
						</div>
						<div class="clear"></div>
					</div>
					<div class="hair_treatment">
						<div class="treatment_img">
							<img src="images/hairimg2.jpg" alt="">
						</div>
						<div class="treatment-desc">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
						</div>
						<div class="clear"></div>
					</div>
					<div class="hair_treatment">
						<div class="treatment_img">
							<img src="images/hairimg3.jpg" alt="">
						</div>
						<div class="treatment-desc">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
						</div>
						<div class="clear"></div>
					</div>
					<div class="hair_treatment">
						<div class="treatment_img">
							<img src="images/hairimg4.jpg" alt="">
						</div>
						<div class="treatment-desc">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
						</div>
						<div class="clear"></div>
					</div>
					<div class="hair_treatment">
						<div class="treatment_img">
							<img src="images/hairimg5.jpg" alt="">
						</div>
						<div class="treatment-desc">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
		    </div>
     		 </div>
    		</div>
	    </div>
