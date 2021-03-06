<html lang="en">

<head>
    <title>实验管理</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="assets/js/jquery.min.js"></script>

</head>

<?php
require_once "header.php";
?>




<div class="am-u-sm-5 am-u-md-4 am-u-lg-3">
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li><a href="teachermain.php" ><span id="teachermain" class="am-icon-safari"></span>教师须知</a></li>
                <li class="admin-parent">
                    <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span>安排教学计划<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                    <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                        <li class="admin-parent">
                            <a id="labmanage" class="am-cf" data-am-collapse="{target: '#collapse-nav1'}"><span class="am-icon-file"></span>实验管理<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                            <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav1">
                                <li><a href="labplan.php" ><span id='labplan' class="am-icon-bug"></span>实验计划</a></li>
                                <li><a href="labguide.php" ><span id='labguide' class="am-icon-bug"></span>实验指导</a></li>
                            </ul>
                        </li>
                        <li><a href="manageclass.php" ><span id="classmanage" class="am-icon-bug"></span>班级管理</a></li>
                        <li><a href="#" ><span id="personaldata" class="am-icon-bug"></span>个人信息</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>