<?php
use yii\widgets\ActiveForm;
?>


<body>
        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="#">控制器</a>
                    </li>

                    <li>
                        <a href="#">表单</a>
                    </li>
                    <li class="active">产品添加</li>
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
            <!--                    --><?php //use yii\widgets\ActiveForm; ?>
            <!--                    --><?php //$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','action'=>'index.php?r=public/p_into','method'=>'post']]) ?>
            <!--
            				<div class="page-content">-->
            <div style="float:right;margin-right: 400px">
            <div class="page-header">
                <h1>
                   产品添加
                    <small>

                    </small>
                </h1>
            </div><!-- /.page-header -->

            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

            <table>
                <tr>
                    <td>产品照片：</td>
                    <td>
                        <!--                                <input type="file" name="imageFile"/>-->
                        <?= $form->field($model, 'imageFile')->fileInput() ?>



                    </td>
                </tr>
                <tr>
                    <td>产品名称:</td>
                    <td><input type="text" name="name"  placeholder="请输入产品名称" required="required" oninvalid="setCustomValidity('请输入你的产品名称！');" oninput="setCustomValidity('');"/></td>
                </tr>
                <tr>
                    <td>产品介绍:</td>
                    <td><textarea name="content" cols="20" rows="5"  placeholder="请输入产品的介绍" required="required" oninvalid="setCustomValidity('请输入你的产品介绍！');" oninput="setCustomValidity('');"></textarea></td>
                </tr>
                <tr>
                    <td>产品功能:</td>
                    <td><textarea name="fuction" cols="20" rows="5"  required="required" placeholder="请输入你的产品功能" required="required" oninvalid="setCustomValidity('请输入你的产品功能！');" oninput="setCustomValidity('');"></textarea></td>
                </tr>
                <tr>
                    <td>产品价格:</td>
                    <td><input type="text" name="price" pattern="[1-9]{2,6}"  placeholder="价格必须是2-6位数字" required="required" oninvalid="setCustomValidity('请输入产品价格！');" oninput="setCustomValidity('');"/></td>
                </tr>
                <tr>
                    <td>服务类型:</td>
                    <td>
                        <select name="type" id="">
                            <?php foreach($typelist as $v):?>
                                <option value="<?php echo $v['type_name']?>"><?php echo $v['type_name']?></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>产品分类:</td>
                    <td><select name="state"  >
                            <option value="1" >新品</option>
                            <option value="2">精品</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >
                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                            点我喔！
                        </button>
                    </td>

                </tr>
            </table>
            <?php ActiveForm::end() ?>
</div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <form class="form-horizontal" role="form">



                        <div style="display:none">

                           </div>
</body>
</html>
