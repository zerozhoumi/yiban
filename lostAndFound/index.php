<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2017/8/27
 * Time: 10:16
 */
include "lib/iapp.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>失物招领</title>
</head>
<link rel="stylesheet" href="lib/layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<body>

<!--图-->
<img src="images/head3.jpg">
<!--我是谁-->
<h1 id="content">你好</h1>
<!--物品显示-->
<div class="layui-tab">
    <ul class="layui-tab-title">
        <li class="layui-this"><i class="layui-icon" style="font-size: 30px; color: #1E9FFF;">&#xe62a;</i>详细信息</li>
        <li>缩略表<i class="layui-icon" style="font-size: 30px; color: #1E9FFF;">&#xe62d;</i></li>
    </ul>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">图片，详情

            <div id="pageNum"></div>
        </div>

        <div class="layui-tab-item">
            wo
            <table class="layui-table" lay-data="{height:600, url:'test/test.json', page:true, id:'table'}" lay-filter="data">
                <thead>
                <tr>
                    <th lay-data="{field:'lostFound', width: 100}">丢/得</th>
                    <th lay-data="{field:'title', width:100}">标题</th>
                    <th lay-data="{field:'moreInfo', width:300}">详情</th>
                    <th lay-data="{field:'lostType', width:100}">物品类型</th>
                    <th lay-data="{field:'time', width:80, sort: true}">时间</th>
                </tr>
                </thead>
            </table>
        </div>

    </div>
</div>

<!--右下角导航按钮--完成-->
</body>
<script src="lib/blooming-menu.min.js"></script>
<script src="lib/layui/layui.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="js/indexView.js"></script>
</html>
