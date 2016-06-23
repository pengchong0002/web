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
                    <a href="#">员工</a>
                </li>
                <li class="active">员工编辑</li>
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
                    员工编辑

                </h1>
            </div><!-- /.page-header -->






            <?php $form = ActiveForm::begin(['action'=>'index.php?r=staff/edit_list2','method'=>'post','options' => ['enctype' => 'multipart/form-data']]);

            ?>
            <input type="hidden" name="id" value="<?php echo $res['id']?>"/>
            <table>
                <tr>
                    <td>员工名称</td>

                    <td><input type="text" name="name" value="<?php echo $res['name']?>"/></td>
                </tr>
                <tr>
                    <td>工作介绍</td>
                    <td><textarea name="conter" cols="20" rows="5"><?php echo $res['conter']?></textarea></td>
                </tr>
                <tr>
                    <td>手机号码</td>
                    <td><input type="text" name="phone" value="<?php echo $res['phone']?>"/></td>
                </tr>
                <tr>
                    <td>主要职位</td>
                    <td>
                            <select name="position" required="required">
                                <?php foreach($typelist as $k=>$v):?>
                                    <?php if($res['position']==$v['position']){?>
                                        <option value="<?php echo $res['position']?>" selected><?php echo $res['position']?></option>
                                    <?php }else{?>
                                        <option value="<?php echo $v['position']?>"><?php echo $v['position']?></option>
                                    <?php }?>
                                <?php endforeach;?>

                            </select>


                        </td>
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
