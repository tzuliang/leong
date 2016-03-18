<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php if(!empty($title)) echo  $title.' - '; ?>尚辰网络 Sunchange<?php if(CONTROLLER_NAME=='index') echo  ' | 深圳市尚辰网络科技有限公司'; ?></title>
<meta name="KeyWords" content="尚辰,尚辰网络,深圳市尚辰网络科技有限公司,尚辰设计,尚辰创业,网站建设,界面交互,企业建站,sunchange">
<meta name="description" content="深圳市尚辰网络科技有限公司成立于2013年3月，是一家年轻、充满梦想的互联网创业创新型企业，尚辰网络致力提供优质网络服务和优质网站建设。尚辰网络的理念是：尊重用户核心体验。">
<meta name="author" content="深圳市尚辰网络科技有限公司">
<meta name="DC.Language" content="zh-CN">
<link href="__STATIC__/css/base.css" rel="stylesheet" type="text/css">
<link href="__STATIC__/css/core.css" rel="stylesheet" type="text/css">
<script src="__STATIC__/js/jquery-1.8.2.min.js"></script>
<script src="__STATIC__/js/jquery.MyFloatingBg.js"></script>
</head>
<body>
<div class="wrapper">
        <!--Header-->
        <div class="header content">
            <div class="logo"><a href="__ROOT__"><img src="__ROOT__/static/images/logo.jpg" alt="尚辰网络"></a></div>
            <ul class="nav">
                <li><a href="__ROOT__">尚辰网络</a><i>Home</i></li>
                <li><a href="<?php echo U('/service'); ?>">服务项目</a><i>Service</i></li>
                <li><a href="<?php echo U('/projects'); ?>">项目案例</a><i>Projects</i></li>
                <li><a href="<?php echo U('/about'); ?>">关于尚辰</a><i>About</i></li>
                <li><a href="<?php echo U('/contact'); ?>">联系我们</a><i>Contact</i></li>
            </ul>
        </div>
<div class="content">
    <div class="page_body">
        <h1><?php echo $title; ?></h1>
        <div><?php echo $body; ?><br/></div>
        <p>
            <strong>转载请注明文章来源：</strong>
            <a href="<?php echo U('/announcement/'.$id); ?>" title="<?php echo $title; ?>" rel="bookmark"><?php echo U('/announcement/'.$id); ?></a><br/>
        </p>
    </div>
    <div class="page_meta">
        <ul>
            <li>
                <a href="<?php echo U('/announcement/'.$id); ?>" title="Permalink to <?php echo $title; ?>" rel="bookmark">
                    <span class="post-format aside">Permalink</span>
                </a>
            </li>
            <li>
                <span>Type:</span>
                <a href="#" rel="type"><?php echo $name; ?></a>
            </li>           
            <li>
                <span>Posted:</span>
                <a href="#" title="Created: <?php echo date("h:i:sa",$creationdate); ?>" rel="bookmark">
                    <time datetime="<?php echo date("Y-m-d h:i:sa",$creationdate); ?>"><?php echo date("F d y",$creationdate); ?></time>
                </a>
            </li>
            <li>
                <span>Tags:</span>
                <a href="#" rel="tag">官网</a>,
                <a href="#" rel="tag">测试</a>
            </li>
            <li>
                <span>Pageviews:</span>
                <a title="Comment on <?php echo $title; ?>" href="<?php echo U('/announcement/'.$id); ?>"><?php echo $hits; ?></a>
            </li>
            <li>
                <span>Comments:</span>
                <a title="Comment on <?php echo $title; ?>" href="<?php echo U('/announcement/'.$id); ?>"><?php echo $postnum; ?></a>
            </li>
        </ul>
    </div>       
</div>

    <div class="footer clear">
        <div class="main">
            <ul class="info">
                <li>深圳市尚辰网络科技有限公司&emsp;SunChangeNetwork</li>
                <li>联系QQ：990981437&emsp;&emsp;Email：Jero@sunchange.cn</li>
                <li>深圳市南山区西丽镇同沙路深圳职业技术学院创意创业园227号</li>
                <li>Copyright ©2013-2014 SUNCHANGE Corporation, All Rights Reserved</li>
                <li>ICP备案号：粤ICP备13052752号
                    <script>
                    var _hmt = _hmt || [];
                    (function() {
                      var hm = document.createElement("script");
                      hm.src = "//hm.baidu.com/hm.js?00b75aca96fa64b2232beafcd3244c35";
                      var s = document.getElementsByTagName("script")[0]; 
                      s.parentNode.insertBefore(hm, s);
                    })();
                    </script>
                </li>
            </ul>
            <ul class="links">
                <li>Links</li>
                <li>薄荷CMS</li>
                <li><a href="http://www.baidu.com/s?wd=%E5%B0%9A%E8%BE%B0%E7%BD%91%E7%BB%9C&rsv_spt=1&issp=1&rsv_bp=0&ie=utf-8&tn=baiduhome_pg&inputT=3770">百度尚辰</a></li>
                <li><a href="http://jiuye.szpt.edu.cn/">深职院就业指导中心</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>