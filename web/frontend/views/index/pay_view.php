<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>

<center>
    <?php $form=ActiveForm::begin(['action'=>Url::toRoute('pay'),'method'=>'post','class'=>'contact-form'])?>
    <table>
        <tr>
            <td>选择金额:</td>
            <td>
                <select name="money" id="">
                    <option value="0.1">0.1</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                    <option value="500">500</option>
                    <option value="1000">1000</option>
                    <option value="5000">5000</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>留言</td>
            <td>
                <textarea name="" id="" cols="25" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td>	<span><input type="submit" class="mybutton" value="提交捐款"></span></td>
        </tr>
    </table>
   <?php $form->end();?>
</center>
