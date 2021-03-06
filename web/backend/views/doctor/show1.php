<?php
use \yii\widgets\LinkPager;

?>
<head>
	<style>
		.image{
			width:43px;
			height:43px;
			border-radius:50px;
		}
	</style>

</head>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">控制台</a>
							</li>

							<li>
								<a href="#">医生管理</a>
							</li>
							<li class="active">医生列表</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								医生
								<small>
									<i class="icon-double-angle-right"></i>
									医生列表
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">

											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>医生名称</th>
														<th>医生头像</th>
														<th>工作薪资</th>
														<th>
															<i class="icon-time bigger-110"></i>
															入职时间
														</th>
														<th>工作序号</th>
														<th>服务类型</th>
														<th>QQ号码</th>
														<th>是否显示</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
												<?php foreach($models as $v):?>
													<input type="hidden" id="listid" value="<?php echo $v['id']?>">
													<tr id="<?php echo $v['id']?>">
														<td class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="index.php?r=doctor/selectmessage&id=<?php echo $v['id']?>"><?php echo $v['name']?></a>
														</td>
														<td>
															<a href="./upload/<?php echo $v['img']?>" data-rel="colorbox">

																<img class="image" src="upload/<?php echo $v['img']?>" alt="" ></td>
														</a>


														<td class="hidden-480"><?php echo $v['price']?></td>
														<td><?php echo $v['times']?></td>
														<td class="hidden-480"><?php echo $v['sort']?></td>
														<td><?php echo $v['type']?></td>
														<td><?php echo $v['qq']?></td>
														<td class="hidden-480">
															<span class="label label-sm label-warning">
																<?php if($v['is_show']==1){?>
																	是
																<?php }else{?>
																	否
																<?php }?>


															</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-info">
																	<i class="icon-edit bigger-120"></i>
																</button>
																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i>
																</button>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
												<?php endforeach;?>
												</tbody>
											</table>
											<center>
											<?php
											echo LinkPager::widget([
												'pagination' => $pages,
											]);
											?>
											</center>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->








							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->


</body>
</html>
<script>
	$(".icon-trash").click(function(){
		var id=$("#listid").val()
		if(confirm('您确定要删除吗！')){
			$.ajax({
				type:'get',
				url:'index.php?r=doctor/del_list',
				data:'id='+id,
				success:function(w){
					if(w==1){
						$("#"+id).remove()
					}

				}
			})
		}
	})


	$(".icon-edit").click(function(){
		var id=$("#listid").val()
		if(confirm('您确定要编辑吗！')){
			location.href='index.php?r=doctor/edit_list&id='+id;
		}
	})
</script>
