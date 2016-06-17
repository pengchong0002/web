<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<script type="text/javascript">
	jQuery(function(){
		jQuery('#camera_wrap_1').camera({
			thumbnails: true
		});
	});

</script>
	<!---End-header--->
						<!--start-image-slider---->
								<div class="slider">
									<div class="fluid_container">
										<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
											      <div data-thumb="<?php echo Url::to('@web/images/thumbnails/slider-1.jpg');?>" data-src="<?php echo Url::to('@web/images/slider-1.jpg');?>">  </div>
											      <div data-thumb="<?php echo Url::to('@web/images/thumbnails/slider-2.jpg');?>" data-src="<?php echo Url::to('@web/images/slider-2.jpg');?>">  </div>
											      <div data-thumb="<?php echo Url::to('@web/images/thumbnails/slider-3.jpg');?>" data-src="<?php echo Url::to('@web/images/slider-3.jpg');?>">  </div>
											      <div data-thumb="<?php echo Url::to('@web/images/thumbnails/slider-4.jpg');?>" data-src="<?php echo Url::to('@web/images/slider-4.jpg');?>">  </div>
											</div>
							    	   </div>
							   		   <div class="clear"></div>
							 		</div>
		      			<!--End-image-slider---->
		<!---start-content---->
		   <div class="content">
		         <div class="wrap">
			          <div class="content_top">
				          <div class="grid1">
				     		<h2>最新产品</h2>
				     	        <div class="grides">
				     				<div class="sub_grid1">
							     		<div class="grid_img">
							     			<img src="<?php echo Url::to('@web/images/grid-img1.jpg');?>">
							     		</div>
								     		<div class="grid_data">
								     			<h3>Neque quisquam</h3>
								     			<p>Finibus Bonorum Malorum  that a reader will be distracted by the readable.<a href="#">MORE INFO</a></p>
								     	  </div>
				     	   			     <div class="clear"></div>
				     				  </div>
					     	<div class="sub_grid2">
					     		<div class="grid_img">
				     			    <img src="<?php echo Url::to('@web/images/grid-img2.jpg');?>">
				     		    </div>
				     		 <div class="grid_data">
				     		 	<h3>Neque quisquam</h3>
				     			<p>Finibus Bonorum Malorum  that a reader will be distracted by the readable. <a href="#">MORE INFO</a></p>
				     	     </div>
				         <div class="clear"></div>
				 	 </div>
				 <div class="clear"></div>
				      <div class="divider"> </div>
				         <div class="sub_grid1">
				     		<div class="grid_img">
				     			<img src="<?php echo Url::to('@web/images/grid-img5.jpg');?>">
				     		</div>
				     		<div class="grid_data">
				     			<h3>Neque quisquam</h3>
				     			<p>Finibus Bonorum Malorum  that a reader will be distracted by the readable. <a href="#">MORE INFO</a></p>
				     	    </div>
				     	   <div class="clear"></div>
				     	</div>
					     	<div class="sub_grid2">
					     		<div class="grid_img">
				     			    <img src="<?php echo Url::to('@web/images/grid-img4.jpg');?>">
				     		    </div>
				     		    <div class="grid_data">
				     		    	<h3>Neque quisquam</h3>
				     			   <p>Finibus Bonorum Malorum  that a reader will be distracted by the readable. <a href="#">MORE INFO</a></p>
				     	        </div>
				     		<div class="clear"></div>
				 		</div>
				       <div class="clear"></div>
				     </div>
				 </div>
				         <div class="grid2">
				         	  <h2>什么是新的</h2>
				         	  <img src="<?php echo Url::to('@web/images/grid-img2.jpg');?>">
				         	  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					   </div>
	       			<div class="clear"></div>
	          </div>
	       </div>
	          <div class="slogan">
		   		<div class="wrap">
				  <div class="content-slogan">
					<p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. sed  incididunt ut <a href="#">labore</a> et dolore magna aliqua. Ut enim ad <a href="#">minim veniam.</a> </p>
				  </div>
				     <div class="slogan-sub">
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
					 </div>
		         </div>
		      </div>
		      <div class="wrap">
			   <div  class="dc-grids">
				   <?php foreach($userinfo as $v) :?>
				<div class="dc-head">
					<div class="dc-head-img">
						<?php if(!empty( $v['img'])) { ?>
						<a href="#"><img src="<?php echo Url::to('@web/images/'. $v['img']);?>" title="dc-name" /></a>
						<?php } else { ?>
							<a href="#"><img src="<?php echo Url::to('@web/images/default.jpg');?>" title="dc-name" /></a>
						<?php } ?>
					</div>
					<div class="dc-head-info">
						<h3><?= $v['name']; ?></h3>
						<span>totam rem aperiam</span>
					</div>
					<div class="clear"> </div>
					<div class="dc-profile">
						<p><?= $v['work_jie']; ?></p>
						<a href="#">更多</a>
					</div>

				</div><?php endforeach; ?>
				<div class="clear"> </div>
		 	 </div>
		  </div>
		 <!---End-content---->
	 </div>
