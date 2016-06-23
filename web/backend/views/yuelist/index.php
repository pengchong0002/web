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
            <li class="active">预约添加</li>
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
                预约添加
                <small>

                </small>
            </h1>
        </div><!-- /.page-header -->
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
        ]) ?>
        <table>
            <tr>
                <td>预约名称:</td>
                <td><input type="text" name="name"  placeholder="请输入预约名称" required="required" oninvalid="setCustomValidity('请输入你的预约名称！');" oninput="setCustomValidity('');"/></td>
            </tr>
            <tr>
                <td>手机号码:</td>
                <td><input type="text" name="phone"  placeholder="请输入手机号码"  pattern='\d{10,11}'  required="required" oninvalid="setCustomValidity('请输入你的手机号码！');" oninput="setCustomValidity('');"/></td>
            </tr>
            <tr>
                <td>预约时间:</td>
                <td><input type="text" name="time"  id="dateinfo" placeholder="请输入预约时间"   required="required" oninvalid="setCustomValidity('请输入你的预约时间！');" oninput="setCustomValidity('');"/></td>
            </tr>
            <tr>
                <td>预约邮箱:</td>
                <td><input type="email" name="email"  id="dateinfo" placeholder="请输入预约邮箱" required="required" oninvalid="setCustomValidity('请输入你的预约邮箱！');" oninput="setCustomValidity('');"/></td>
            </tr>
            <tr>
                <td>预约医生:</td>
                <td>
                    <select name="w_id" id="">
                        <?php foreach($doctor as $v):?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
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
