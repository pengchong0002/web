<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
	 <!---start-content---->
		<div class="wrap">
		   <div class="content">
				  <div class="project-top-patination">
								<ul>
									<li><a href="index.html">Mainpage</a></li>
									<li><p>跳转</p></li>
								</ul>
							</div>
<center>
	<img src="<?php echo Url::to('@web/images/default.jpg')?>" style="height: 300px;width: 300px" alt="">
	<h1 id="info">提交成功请耐心等待</h1>
	<h2><a href="<?php echo Url::toRoute('index');?>">或者点这里跳转
		</a>
	</h2>
</center>
							<div class="clear"> </div>
			           </div>
			        </div>
<script>
	var b=0;
	$(function(){
		setInterval('add_state()',1000);
	})
	function add_state()
	{

		b++
		if(b>3)
		{
            location.href="<?php echo Url::toRoute('index')?>"
		}else
		{
			var tishi=$("#info").html();
			$("#info").html(tishi+'.');
		}

	}

</script>

