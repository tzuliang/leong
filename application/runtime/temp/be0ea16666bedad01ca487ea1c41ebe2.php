<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Sunchange Website Manager System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap -->
    <link href="__STATIC__/admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="__STATIC__/admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="__STATIC__/admin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />
    <!-- libraries -->
    <link href="__STATIC__/admin/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__/admin/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/icons.css" />
    <!-- this page specific styles -->
    <link rel="stylesheet" href="__STATIC__/admin/css/compiled/index.css" type="text/css" media="screen" />    
    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />
    <!-- lato font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?php echo U('index/index'); ?>"><img src="__STATIC__/admin/img/logo.png" /></a>
            <ul class="nav pull-right">                
                <li class="hidden-phone">
                    <input class="search" type="text" />
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-warning-sign"></i>
                        <span class="count">8</span>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="notifications">
                                <h3>您有 6 个新通知</h3>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新用户注册
                                    <span class="time"><i class="icon-time"></i> 13 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新用户注册
                                    <span class="time"><i class="icon-time"></i> 18 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-envelope-alt"></i> 新用户注册
                                    <span class="time"><i class="icon-time"></i> 28 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新用户注册
                                    <span class="time"><i class="icon-time"></i> 49 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-download-alt"></i> 新订单生成
                                    <span class="time"><i class="icon-time"></i> 1 day.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">查看所有通知</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger"><i class="icon-envelope-alt"></i></a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="messages">
                                <a href="#" class="item">
                                    <img src="__STATIC__/admin/img/contact-img.png" class="display" />
                                    <div class="name">雅丽德拉</div>
                                    <div class="msg">
                                        有可用的许多变化，但大多数遭受改变。
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 13 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <img src="__STATIC__/admin/img/contact-img2.png" class="display" />
                                    <div class="name">雅丽德拉</div>
                                    <div class="msg">
                                        有可用，遭受改建许多变化。
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 26 min.</span>
                                </a>
                                <a href="#" class="item last">
                                    <img src="__STATIC__/admin/img/contact-img.png" class="display" />
                                    <div class="name">雅丽德拉</div>
                                    <div class="msg">
                                        有可用的许多变化，但大多数遭受变化。
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 48 min.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">查看所有简讯</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                        您的帐户<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="personal-info.html">帐号信息</a></li>
                        <li><a href="#">帐户设定</a></li>
                        <li><a href="#">导出数据</a></li>
                        <li><a href="#">意见反馈</a></li>
                    </ul>
                </li>
                <li class="settings hidden-phone">
                    <a href="personal-info.html" role="button">
                        <i class="icon-cog"></i>
                    </a>
                </li>
                <li class="settings hidden-phone">
                    <a href="signin.html" role="button">
                        <i class="icon-share-alt"></i>
                    </a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="<?php echo U('index/index'); ?>">
                    <i class="icon-home"></i>
                    <span>首页</span>
                </a>
            </li>            
<!--             <li>
                <a href="chart-showcase.html">
                    <i class="icon-signal"></i>
                    <span>数据</span>
                </a>
            </li> -->
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>用户</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('user/lists'); ?>">用户列表</a></li>
                    <li><a href="<?php echo U('user/add'); ?>">添加用户</a></li>
                    <!-- <li><a href="user-profile.html">用户管理</a></li> -->
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-edit"></i>
                    <span>内容</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('content/lists'); ?>">内容列表</a></li>
                    <li><a href="<?php echo U('content/add'); ?>">添加内容</a></li>
                    <li><a href="<?php echo U('content/category'); ?>">分类管理</a></li>
                </ul>
            </li>
            <!-- <li>
                <a href="gallery.html">
                    <i class="icon-picture"></i>
                    <span>图集</span>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="icon-calendar-empty"></i>
                    <span>日历</span>
                </a>
            </li>
            <li>
                <a href="tables.html">
                    <i class="icon-th-large"></i>
                    <span>表格</span>
                </a>
            </li>-->
            <li>
                <a class="dropdown-toggle ui-elements" href="#">
                    <i class="icon-code-fork"></i>
                    <span>模块</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="#">留言管理</a></li>
                    <li><a href="#">友情链接</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="icon-cog"></i>
                    <span>设置</span>
                </a>
            </li> 
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-share-alt"></i>
                    <span>其他</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="signin.html">锁定屏幕</a></li>
                    <li><a href="#">注销帐户</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->
    <!-- libraries -->
    <link href="__STATIC__/admin/css/lib/bootstrap-wysihtml5.css" type="text/css" rel="stylesheet" />
    <link href="__STATIC__/admin/css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="__STATIC__/admin/css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="__STATIC__/admin/css/lib/bootstrap-datetimepicker.css" type="text/css" rel="stylesheet" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="__STATIC__/admin/css/compiled/form-showcase.css" type="text/css" media="screen" />
	
    <!-- main container -->
    <div class="content">
        <!-- settings changer -->
        <div class="skins-nav">
            <a href="#" class="skin first_nav selected">
                <span class="icon"></span><span class="text">默认模式</span>
            </a>
            <a href="#" class="skin second_nav" data-file="__STATIC__/admin/css/skins/dark.css">
                <span class="icon"></span><span class="text">夜间模式</span>
            </a>
        </div>

        <div class="container-fluid">
            <div id="pad-wrapper" class="form-page">
                <div class="row-fluid form-wrapper">
                    <!-- left column -->
                    <form action="<?php echo U('content/save','id='.$id); ?>" method="post">
                    <div class="span8 column">
                        
                            <div class="field-box">
                                <label>标题:</label>
                                <input name="title" class="span9 inline-input" placeholder="请输入新标题" maxlength="90" type="text" value="<?php echo $title; ?>" />
                            </div>
                            <div class="field-box">
                                <label>属性:</label>
                                <label class="checkbox">
                                    <input type="checkbox" name="featured" value="1" <?php if(!empty($featured)) echo  'checked'; ?> />头条
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="sticky" value="1" <?php if(!empty($sticky)) echo  'checked'; ?> />置顶
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="promoted" value="1" <?php if(!empty($promoted)) echo  'checked'; ?> />推荐
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bold" value="1" <?php if(!empty($bold)) echo  'checked'; ?> />加粗
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="skip" value="1" <?php if(!empty($skip)) echo  'checked'; ?> />转跳
                                </label>
                            </div>
                            <div class="field-box">
                                <label>作者:</label>
                                <input name="authorid" class="span3 inline-input" placeholder="作者名称" maxlength="20" type="text" value="<?php echo $authorid; ?>" /> 
                                <label>来源:</label>
                                <input name="source" class="span4 inline-input" placeholder="内容来源" maxlength="80" type="text" value="<?php echo $source; ?>"/>
                            </div>
                            <div class="field-box">
                                <label>来源URL:</label>
                                <input name="sourceurl" class="span9 inline-input" placeholder="请输入来源URL" maxlength="90" type="text" value="<?php echo $sourceurl; ?>" />
                            </div>
                            <div class="field-box">
                                <script id="container" name="body" type="text/plain">
                                    <?php echo $body; ?>
                                </script>
                            </div>
                    
                        <!-- 配置文件 -->
                        <script type="text/javascript" src="__STATIC__/ueditor/ueditor.config.js"></script>
                        <!-- 编辑器源码文件 -->
                        <script type="text/javascript" src="__STATIC__/ueditor/ueditor.all.js"></script>
                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">var editor = UE.getEditor('container');</script>  
                    </div>
                    <!-- right column -->
                    <div class="span4 column pull-right">
                        
                            <div class="field-box">
                                <label>状态:</label>
                                <label class="radio">公开<input name="status" type="radio" value="published" <?php if($status=='published') echo  'checked'; ?> /></label>
                                <label class="radio">私密<input name="status" type="radio" value="unpublished" <?php if($status=='unpublished') echo  'checked'; ?> /></label>
                            </div>
                            <div class="field-box">
                                <label>发布时间:</label>
                                <input name="creationdate" type="text" value="<?php echo date("yy-m-d h:i:s",$creationdate); ?>" class="input-large datetimepicker" />
                            </div>
                            <div class="field-box">
                                <label>分类:</label>
                                <div class="ui-select">
                                    <select name="categoryid">
                                        <option value="1" <?php if($categoryid=='1') echo  'selected'; ?> />Announcement
                                        <option value="2" <?php if($categoryid=='2') echo  'selected'; ?> />Dynamic
                                    </select>
                                </div>
                            </div>
                            <div class="field-box">
                                <label>标签:</label>
                                <input class="span6" type="text"  placeholder="请用英文逗号或空格隔开标签" />
                            </div>
                            <div class="field-box">
                                <label>转向链接:</label>
                                <input class="span6" type="text"  placeholder="请输入转向URL" />
                            </div>
                            <div class="field-box">
                                <input class="btn-flat" type="submit" value="完成编辑，提交数据">
                            </div>
                    
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="__STATIC__/admin/js/wysihtml5-0.3.0.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="__STATIC__/admin/js/bootstrap.min.js"></script>
    <script src="__STATIC__/admin/js/bootstrap-wysihtml5-0.0.2.js"></script>
    <script src="__STATIC__/admin/js/bootstrap.datetimepicker.js"></script>
    <script src="__STATIC__/admin/js/jquery.uniform.min.js"></script>
    <script src="__STATIC__/admin/js/select2.min.js"></script>
    <script src="__STATIC__/admin/js/theme.js"></script>
    <!-- call this page plugins -->
    <script type="text/javascript">
        $(function () {

            // add uniform plugin styles to html elements
            $("input:checkbox, input:radio").uniform();

            // select2 plugin for select elements
            $(".select2").select2({
                placeholder: "选择分类"
            });

            // datetimepicker plugin
            
            $('.datetimepicker').datetimepicker({
                format: 'yyyy-mm-dd hh:ii:ss',
                todayBtn: "linked"
            }).on('changeDate', function (ev) {
                
                $(this).datetimepicker('hide');
            });

            // wysihtml5 plugin on textarea
            $(".wysihtml5").wysihtml5({
                "font-styles": false
            });
        });
    </script>

</body>
</html>