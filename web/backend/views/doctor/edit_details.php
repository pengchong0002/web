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
                <a href="#">医生</a>
            </li>
            <li class="active">医生详情编辑</li>
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
                医生详情编辑
                <small>

                </small>
            </h1>
        </div><!-- /.page-header -->
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <input type="hidden" name="id" value="<?php echo $arr['id']?>">
        <table>
            <tr>
                <td>工作经历:</td>
                <td><textarea name="work_li" cols="20" rows="5"   placeholder="请输入工作经历" required="required" oninvalid="setCustomValidity('请输入你的工作经历！');" oninput="setCustomValidity('');"><?php echo $arr['work_li']?></textarea></td>
            </tr>
            <tr>
                <td>工作介绍:</td>
                <td><textarea name="work_jie" cols="20" rows="5"  placeholder="请输入工作介绍" required="required" oninvalid="setCustomValidity('请输入你的工作介绍！');" oninput="setCustomValidity('');"><?php echo $arr['work_jie']?></textarea></td>
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
</body>
</html>
