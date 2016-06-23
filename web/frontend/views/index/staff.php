<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<!--n3 is staff-->
<script>
	$(document).ready(function(){
		$(".active").prop('class','');
		$("#n3").prop('class','active');
		var zhi=$("#n3").html();
		$("#title").html(zhi)
	})
</script>
		<!---start-content---->
		<div class="wrap">
		<div class="content">
			<div class="our-staff">
				<div class="project-top-patination">
								<ul>
									<li><a href="<?php echo Url::to(['index']);?>">Mainpage</a></li>
									<li><p id="title"></p></li>
								</ul>
							</div><br />
			<div  class="dc-grids">
				<?php foreach($info as $v):?>
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
						<a href="<?php echo Url::toRoute(['more','id'=>$v['id']]);?>">更多信息</a>
					</div>
				</div>
                 <?php endforeach;?>
				<div class="clear"> </div>
			</div>

			<div class="projects-bottom-paination">
							<?= LinkPager::widget(['pagination' => $pages]); ?>
					</div>
			   </div>	
			  </div>
		    </div>
