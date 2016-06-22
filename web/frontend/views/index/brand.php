<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<!--n3 is staff-->

		<!---start-content---->
		<div class="wrap">
		<div class="content">
			<div class="our-staff">
				<div class="project-top-patination">
								<ul>
									<li><a href="<?php echo Url::to(['index']);?>">Mainpage</a></li>
									<li><p id="title">产品</p></li>
								</ul>
							</div><br />
			<div  class="dc-grids">
				<?php foreach($info as $v):?>
				<div class="dc-head">
					<div class="dc-head-img">
						<?php if(!empty( $v['img'])) { ?>
							<a href="<?php echo Url::toRoute(['more','id'=>$v['id']]);?>"><img src="<?php echo Url::to('@web/images/'. $v['img']);?>" width="200" height="200" title="优秀技师<?php echo $v['name']?>" /></a>
						<?php } else { ?>
							<a href="<?php echo Url::toRoute(['more','id'=>$v['id']]);?>"><img src="<?php echo Url::to('@web/images/default.jpg');?>" title="优秀技师<?php echo $v['name']?>" /></a>
						<?php } ?>
					</div>
					<div class="dc-head-info">
						<h3><?= $v['name']; ?></h3>
						<span></span>
					</div>
					<div class="clear"> </div>
					<div class="dc-profile">
						<p><?= $v['content']; ?></p>
						<a href="<?php echo Url::toRoute(['brand_info','id'=>$v['id']]);?>">更多信息</a>
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
