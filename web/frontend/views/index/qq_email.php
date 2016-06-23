<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<script>
    $(document).ready(function(){
        //百度map
        var src="<?php echo Url::to('@web/images/bawei.jpg')?>";
        var sContent ="<h4 style='margin:0 0 5px 0;padding:0.2em 0'>八维保健店(上帝店)</h4>" +
            "<img style='float:right;margin:4px' id='imgDemo' src='"+src+"' width='56' height='34' title='天安门'/>" +
            "<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>八维保健店是有彭冲组员一起开发的八维保健品店这里能满足您的一切需求...</p>" +
            "</div>";;
        var map = new BMap.Map("l-map");
        var point = new BMap.Point(116.306358,40.049288);
        map.centerAndZoom(point, 20);
        var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
        map.openInfoWindow(infoWindow,point); //开启信息窗口
        document.getElementById("r-result").innerHTML = "八维保健店介绍：<br />" + infoWindow.getContent();
    })

    // 百度地图API功能

</script>
<center>
    <h3>欢迎<?php echo $name;?>先生预约成功,请您在<?php echo $time;?>之前到达</h3>

    <div id="l-map"></div>
    <div id="r-result"></div>
</center>