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
            <li class="active">医生添加</li>
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
                医生添加
                <small>

                </small>
            </h1>
        </div><!-- /.page-header -->
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <table>
            <tr>
                <td>医生名称:</td>
                <td><input type="text" name="name"  placeholder="请输入医生名称" required="required" oninvalid="setCustomValidity('请输入你的医生名称！');" oninput="setCustomValidity('');"/></td>
            </tr>
            <tr>
                <td>医生头像:</td>
                <td> <?= $form->field($model, 'img')->fileInput() ?></td>
            </tr>
            <tr>
                <td>工作经历:</td>
                <td><textarea name="work_li" cols="20" rows="5"  placeholder="请输入工作经历" required="required" oninvalid="setCustomValidity('请输入你的工作经历！');" oninput="setCustomValidity('');"></textarea></td>
            </tr>
            <tr>
                <td>工作介绍:</td>
                <td><textarea name="work_jie" cols="20" rows="5"  placeholder="请输入工作介绍" required="required" oninvalid="setCustomValidity('请输入你的工作介绍！');" oninput="setCustomValidity('');"></textarea></td>
            </tr>
            <tr>
                <td>医生薪资:</td>
                <td><input type="text" name="price"  placeholder="薪资必须是4-6位的数字" pattern="[1-9]{4,6}" required="required" oninvalid="setCustomValidity('请输入你的医生薪资！');" oninput="setCustomValidity('');"/></td>
            </tr>
            <tr>
                <td>QQ号码:</td>
                <td><input type="text" name="qq"  placeholder="QQ号码必须是5-11位的数字" pattern="[1-9]{5,11}" required="required" oninvalid="setCustomValidity('请输入你的QQ号码！');" oninput="setCustomValidity('');"/></td>
            </tr>
            <tr>
                <td>入职时间:</td>
                <td><input type="text" name="times"  id="dateinfo" placeholder="请输入医生名称" required="required" oninvalid="setCustomValidity('请输入你的医生名称！');" oninput="setCustomValidity('');"/></td>
            </tr>
            <tr>
                <td>医生排序:</td>
                <td>
                    <select name="sort" id="">
                        <?php for($i=1;$i<=100;$i++){?>
                            <option value="<?php echo $i?>"><?php echo $i?></option>
                        <?php }?>
                    </select></td>
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
                <td>是否显示:</td>
                <td>
                    <input type="radio" name="is_show"  value="1" required="required"/>是
                    <input type="radio" name="is_show"  value="0"/>否
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
