<?php
use yii\widgets\ActiveForm;
?>

<head>
    <script type="text/javascript" src="js/jedate/jedate.js"></script>
</head>
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
            <li class="active">员工添加</li>
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
    <div style="float:right;margin-right: 400px">
        <div class="page-header">
            <h1>
                员工添加
                <small>

                </small>
            </h1>
        </div><!-- /.page-header -->
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <table>
            <tr>
                <td>员工名称:</td>
                <td><input type="text" name="name"  placeholder="请输入员工名称" required="required" oninvalid="setCustomValidity('请输入员工名称！');" oninput="setCustomValidity('');"/></td>
            </tr>
            <tr>
                <td>员工头像:</td>
                <td> <?= $form->field($model, 'img')->fileInput() ?></td>
            </tr>
            <tr>
                <td>手机号码:</td>
                <td>
                    <input type="text" name="phone" placeholder="手机号必须是十一位" pattern="[1-9]{11}" required="required" oninvalid="setCustomValidity('请输入你的手机号码！');" oninput="setCustomValidity('');"/>
                   </td>
            </tr>
            <tr>
                <td>工作介绍:</td>
                <td><textarea name="content" cols="20" rows="5"  placeholder="请输入工作介绍" required="required" oninvalid="setCustomValidity('请输入你的工作介绍！');" oninput="setCustomValidity('');"></textarea></td>
            </tr>
            <tr>
                <td>主要职位:</td>
                <td>
                    <select name="position" required="required">
                        <?php foreach($typelist as $v):?>
                            <option value="<?php echo $v['position']?>"><?php echo $v['position']?></option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
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
                <script type="text/javascript">
                    jeDate({
                        dateCell:"#dateinfo",
                        isinitVal:true,
                        isTime:true, //isClear:false,
                    })
                </script>
</body>
</html>
