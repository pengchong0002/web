<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
		<!---start-content---->
		<div class="wrap">
		<div class="content">
			<div class="our-staff">
				<div class="project-top-patination">
								<ul>
									<li><a href="index.html">Mainpage</a></li>
									<li><p>Staff</p></li>
								</ul>
							</div><br />
			<div  class="dc-grids">
				<?php foreach($info as $v):?>
				<div class="dc-head">
					<div class="dc-head-img">
						<?php if(!empty( $v['img'])) { ?>
							<a href="#"><img src="<?php echo Url::to('@web/images/'. $v['img']);?>" title="优秀技师<?php echo $v['name']?>" /></a>
						<?php } else { ?>
							<a href="#"><img src="<?php echo Url::to('@web/images/default.jpg');?>" title="优秀技师<?php echo $v['name']?>" /></a>
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
						<a href="#">更多信息</a>
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
