<?php
use yii\widgets\ActiveForm;
?>




<body>


<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

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
                        <a href="#">产品</a>
                    </li>
                    <li class="active">产品编辑</li>
                </ul><!-- .breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- #nav-search -->
            </div>
<center>
            <div class="page-header">
                <h1>
                    产品编辑

                </h1>
            </div><!-- /.page-header -->






            <?php $form = ActiveForm::begin(['action'=>'index.php?r=index/edit_list2','method'=>'post','options' => ['enctype' => 'multipart/form-data']]);

            ?>
            <input type="hidden" name="id" value="<?php echo $res[0]['id']?>"/>
            <table>

                <tr>
                    <td>名称</td>
                    <td><input type="text" name="name" value="<?php echo $res[0]['name']?>"/></td>
                </tr>
                <tr>
                    <td>产品介绍</td>
                    <td><textarea name="content" cols="20" rows="5"><?php echo $res[0]['content']?></textarea></td>
                </tr>
                <tr>
                    <td>产品功能</td>
                    <td><textarea name="fuction" cols="20" rows="5"><?php echo $res[0]['fuction']?></textarea></td>
                </tr>
                <tr>
                    <td>产品价格:</td>
                    <td><input type="text" value="<?php echo $res[0]['price']?>" name="price" pattern="[1-9]{2,6}"  placeholder="价格必须是2-6位数字" required="required" oninvalid="setCustomValidity('请输入产品价格！');" oninput="setCustomValidity('');"/></td>
                </tr>
                <tr>
                    <td>服务类型:</td>
                    <td>
                        <select name="type" id="">
                            <?php foreach($typelist as $k=>$v):?>
                                <?php if($res[0]['type']==$v['type_name']){?>
                                    <option value="<?php echo $res[0]['type']?>" selected><?php echo $res[0]['type']?></option>
                                <?php }else{?>
                                    <option value="<?php echo $v['type_name']?>"><?php echo $v['type_name']?></option>
                                <?php }?>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>产品分类</td>
                    <td><select name="state" id="">
                            <?php if($res[0]['state']==1){?>
                                <option value="1" selected>新品</option>
                                <option value="2" >精品</option>
                            <?php }else{?>
                                <option value="1">新品</option>
                                <option value="2" selected>精品</option>
                            <?php }?>

                        </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td> <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                            点我喔！
                        </button></td>

                </tr>
            </table>
            <?php ActiveForm::end() ?>
</center>





            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <form class="form-horizontal" role="form">



                        <div style="display:none"></div>
</body>
</html>
