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
<!--n3 is staff-->
<script>
	$(document).ready(function(){
		$(".active").prop('class','');
		$("#n1").prop('class','active');
		var zhi=$("#n1").html();
		$("#title").html(zhi)
	})
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
									<?php foreach($brand as $v ):?>
				     				<div class="sub_grid1">
							     		<div class="grid_img">
							     			<img src="<?php echo Url::to('@web/images/'.$v['img']);?>">
							     		</div>
								     		<div class="grid_data">
								     			<h3><?php echo $v['name'];?></h3>
								     			<p><?php echo $v['content']?>.<a href="#">更多信息</a></p>
								     	  </div>
				     	   			     <div class="clear"></div>
				     				  </div>
                                   <?php endforeach;?>
				     </div>
							  <a href="<?php echo Url::toRoute('brand_more');?>" style="color:#FFAF2C;">查看更多</a>
				 </div>
				         <div class="grid2">
				         	  <h2>每日推荐新品</h2>
				         	  <img src="<?php echo Url::to('@web/images/grid-img2.jpg');?>">
				         	  <p>这是来自长白山的舌龙花,会让人不自觉的进入一种全新的状态,现在立即来体验吧!</p>
					   </div>
	       			<div class="clear"></div>
	          </div>
	       </div>
	          <div class="slogan">
		   		<div class="wrap">
				  <div class="content-slogan">
					<p>保健品的通俗说法。能调节人体的<a href="">机能</a>，适用于特定<a href="">人群</a>，不以治疗疾病为目的.保健品的保健作用在当今的社会中，也正在逐步被广大群众所接受 </p>
				  </div>
				     <div class="slogan-sub">
						<p>近年来随着发达国家经济的发展及生活水平的提高，加上现代医学的进步，世界人均寿命不断上升。据1982年统计，日本人的人均寿命达77岁，美国为75岁，其他发达国家人均寿命也提高到74-79岁之间.老年人口比例在增大.1982年日本65岁以上老年人口占日本总人口比例的9%，3年后的1985年就超出了10%。据预测，21世纪初将达到15%，2020年会突破20%。欧美国家也呈同样趋势。21世纪初预计老年人口将占总人口的15%</p>
					 </div>
		         </div>
		      </div>
		      <div class="wrap">
			   <div  class="dc-grids">
				   <?php foreach($userinfo as $v) :?>
				<div class="dc-head">
					<div class="dc-head-img">
						<?php if(!empty( $v['img'])) { ?>
						<a href="<?php echo Url::toRoute(['more','id'=>$v['id']]);?>"><img src="<?php echo Url::to('@web/images/'. $v['img']);?>" title="优秀技师<?php echo $v['name']?>" /></a>
						<?php } else { ?>
							<a href="<?php echo Url::toRoute(['more','id'=>$v['id']]);?>"><img src="<?php echo Url::to('@web/images/default.jpg');?>" title="优秀技师<?php echo $v['name']?>" /></a>
						<?php } ?>
					</div>
					<div class="dc-head-info">
						<h3><?= $v['name']; ?></h3>
						<span><?php
							if(!empty($v['type']))
							{
								echo $v['type'];
							}else
							{
								echo "优秀医师";
							}
							?></span>
					</div>
					<div class="clear"> </div>
					<div class="dc-profile">
						<p><?= $v['work_jie']; ?></p>
						<a href="<?php echo Url::toRoute(['staff']);?>">更多</a>
					</div>

				</div><?php endforeach; ?>
				<div class="clear"> </div>
		 	 </div>
		  </div>
		 <!---End-content---->
	 </div>
