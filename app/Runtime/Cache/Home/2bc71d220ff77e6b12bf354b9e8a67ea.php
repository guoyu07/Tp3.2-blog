<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh" class="app">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="renderer" content="webkit">
        <meta name="keywords" content="博客,技术博客,个人技术博客,php,python,前端,存储,javascript,angularjs">
        <meta name="description" content="博客,技术博客,个人技术博客,php,python,前端,存储,javascript,angularjs">
        <title>
            <?php echo ($title); ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" href="/blog/Public/images/favicon.ico">
        <link rel="stylesheet" href="/blog/Public/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="/blog/Public/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="/blog/Public/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="/blog/Public/css/simple-line-icons.css" type="text/css" />
        <link rel="stylesheet" href="/blog/Public/css/font.css" type="text/css" />
        <link rel="stylesheet" href="/blog/Public/css/app.css" type="text/css" />
        <link rel="stylesheet" href="/blog/Public/js/datepicker/datepicker.css" type="text/css" />
        <link rel="stylesheet" href="/blog/Public/css/index.css"/>
        <link media="all" rel="stylesheet" type="text/css" href="/blog/Public/simditor/styles/simditor.css"/>
        <link rel="stylesheet" href="/blog/Public/css/iosAlert/custom.css"/>
        <link rel="stylesheet" href="/blog/Public/css/iosAlert/iosOverlay.css"/>
        <link rel="stylesheet" href="/blog/Public/css/iosAlert/prettify.css"/>
        <link rel="shortcut icon" href="/blog/Public/images.ico" type="image/x-icon" />
        <script src="/blog/Public/js/jquery.min.js">
        </script>
        <script type="text/javascript" src="/blog/Public/js/angular.min.js">
        </script>
        <script type="text/javascript" src="/blog/Public/js/angular-route.min.js">
        </script>
        <script type="text/javascript" src="/blog/Public/js/angular-sanitize.js">
        </script>
        <script type="text/javascript" src="/blog/Public/js/ui-bootstrap-tpls-0.10.0.min.js">
        </script>
        <script type="text/javascript" src="/blog/Public/_static/home.js">
        </script>
        <script type="text/javascript" src="/blog/Public/_static/index.js">
        </script>
        <script type="text/javascript" src="/blog/Public/_static/php.js">
        </script>
        <script type="text/javascript" src="/blog/Public/_static/python.js">
        </script>
        <script type="text/javascript" src="/blog/Public/_static/frontend.js">
        </script>
        <script type="text/javascript" src="/blog/Public/_static/storage.js">
        </script>
        <script type="text/javascript" src="/blog/Public/_static/message.js">
        </script>
        <script type="text/javascript" src="/blog/Public/_static/news.js">
        </script>
        <script type="text/javascript" src="/blog/Public/_static/detail.js">
        </script>
        <!--[if lt IE 9]>
            <script src="/blog/Public/js/ie/html5shiv.js">
            </script>
            <script src="/blog/Public/js/ie/respond.min.js">
            </script>
            <script src="/blog/Public/js/ie/excanvas.js">
            </script>
        <![endif]-->
    </head>
    <body id="body">
        <section class="vbox">
            <header class="bg-white-only header header-md navbar navbar-fixed-top-xs" style="background-color: #232c32">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false"
                        data-target=".navbar-responsive-collapse">
                        <span class="sr-only">
                            Toggle
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                    <a class="navbar-brand logo" href="<?php echo U('/index');?>">
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo U('/index');?>">
                                <i class="icon  icon-home">
                                </i>
                                首页
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo U('/php');?>">
                                PHP
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('/python');?>">
                                Python
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('/storage');?>">
                                存储
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('/frontend');?>">
                                前端
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('/news');?>">
                                IT资讯
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('/message');?>">
                                留言板
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('/about');?>">
                                关于我
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        
                    </ul>
                </div>
            </header>

<section id="content"ng-app="blogApp" ng-controller="postCrtl">
    <section class="vbox">
        <section class="scrollable wrapper-lg">
            <div class="row">
                <div class="col-lg-12">
                    <!-- .breadcrumb -->
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?php echo U('/index');?>">
                                <i class="fa fa-home">
                                </i>
                                首页
                            </a>
                        </li>
                    </ul>
                    <!-- / .breadcrumb -->
                </div>
                <div class="col-sm-9">
                    <div class="blog-post">
                        <div class="post-item" ng-repeat="post in filtered = (posts | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                            <div class="caption wrapper-lg">
                                <h5 class="post-title">
                                    <a href="index/detail/aid/{{post.aid}}">
                                        {{post.title}}
                                    </a>
                                </h5>
                                <div class="post-sum">
                                    <p>
                                        {{post.summary}}
                                    </p>
                                </div>
                                <div class="line line-lg">
                                </div>
                                <div class="text-muted">
                                    <i class="fa fa-clock-o icon-muted">
                                    </i>
                                    <a class="m-r-sm" href="javascript:;">
                                        {{post.ctime}}
                                    </a>
                                    <i class="fa fa-bookmark-o icon-muted">
                                    </i>
                                    <a class="m-r-sm" href="javascript:;">
                                        {{post.cname.columname}}
                                    </a>
                                    <i class="fa fa-eye icon-muted">
                                    </i>
                                    <a class="m-r-sm" href="javascript:;">
                                        {{post.rnum}}浏览
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center m-t-lg m-b-lg" ng-show="filteredItems >0">
                        <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;">
                        </div>
                    </div>
                    <div class="col-lg-12" ng-show="filteredItems == 0">
                        <p style="text-align: center;padding: 10px;font-size: 14px;color: #ccc">
                            <i class="glyphicon glyphicon-pencil">
                            </i>
                            &nbsp;&nbsp;暂无相关文章
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search" style="margin: 0;padding: 0;width: 100%;margin-bottom: 10px;">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-sm bg-white btn-icon rounded">
                                    <i class="fa fa-search">
                                    </i>
                                </button>
                            </span>
                            <input type="text" ng-model="search" ng-change="filter()" class="form-control input-sm no-border rounded" placeholder="搜索..."/>
                        </div>
                    </div>
                    <section class="panel panel-default" style="margin-top: 40px">
    <div class="panel-body">
        <div class="clearfix text-center m-t">
            <div class="inline">
                <div class="easypiechart" data-percent="75" data-line-width="5" data-bar-color="#4cc0c1" data-track-Color="#f5f5f5" data-scale-Color="false" data-size="134" data-line-cap='butt' data-animate="1000">
                    <div class="thumb-lg">
                        <img src="/blog/Public/images/head/1.png" class="img-circle" alt="..."/>
                    </div>
                </div>
                <div class="h4 m-t m-b-xs">
                    Virtual
                </div>
                <small class="text-muted m-b">
                    Acmen
                </small>
            </div>
        </div>
    </div>
    <footer class="panel-footer bg-info text-center">
        <div class="row pull-out">
            <div class="col-xs-4">
                <div class="padder-v">
                    <span class="m-b-xs h3 block text-white">
                        <a href="https://github.com/chunlintang/" target="_blank" class="btn btn-icon" style="font-size: 25px">
                            <i class="fa fa-github">
                            </i>
                        </a>
                    </span>
                    <small class="text-muted">
                        Github
                    </small>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="padder-v">
                    <span class="m-b-xs h3 block text-white">
                        <a href="http://weibo.com/tangchunlinwb?is_all=1" target="_blank" class="btn btn-sm btn-icon" style="font-size: 25px">
                            <i class="fa fa-weibo">
                            </i>
                        </a>
                    </span>
                    <small class="text-muted">
                        Weibo
                    </small>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="padder-v">
                    <span class="m-b-xs h3 block text-white">
                        <a href="http://www.linkedin.com/in/chunlintang/" target="_blank" class="btn btn-sm btn-icon" style="font-size: 25px">
                            <i class="fa fa-linkedin">
                            </i>
                        </a>
                    </span>
                    <small class="text-muted">
                        Linkedin
                    </small>
                </div>
            </div>
        </div>
    </footer>
</section>
<section class="panel panel-default">
    <div class="wrapper bg-light lt" style="padding: 10px">
        热门文章
    </div>
    <ul class="list-group no-radius">
        <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list-group-item hotpost">
                <span class="pull-right">
                    <?php echo ($vo["rnum"]); ?>
                </span>
                <a href="index/detail/aid/<?php echo ($vo["aid"]); ?>">
                    <span class="label <?php if($i == 1){echo 'bg-primary';}elseif($i == 2){echo 'bg-info';}elseif($i == 3){echo 'bg-success';}else{echo 'bg-light';}?>">
                        <?php echo $i;?>
                    </span>
                    &nbsp;<?php echo ($vo["title"]); ?>
                </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</section>
<section class="panel panel-info portlet-item">
    <header class="panel-heading">
        快速链接
    </header>
    <div class="list-group bg-white">
        <a href="http://www.thinkphp.cn/" target="_blank" class="list-group-item">
            ThinkPHP中文开发框架
        </a>
        <a href="http://www.apjs.net/" target="_blank" class="list-group-item">
            AngularJS中文网
        </a>
        <a href="http://www.weiphp.cn/" class="list-group-item">
            WeiPHP微信公众平台开发框架
        </a>
    </div>
</section>
<section class="panel panel-info-2 portlet-item">
    <header class="panel-heading-2">
        友情链接
    </header>
    <div class="list-group bg-white">
        <a href="http://www.ddhigh.com/" target="_blank" class="btn btn-rounded btn-sm list-group-item">
            每天进步一点点
        </a>
        <a href="http://www.itipai.com/" target="_blank" class="btn btn-rounded btn-sm list-group-item">
            it派
        </a>
        <a href="http://www.zanyy.com/" target="_blank" class="btn btn-rounded btn-sm list-group-item">
            赞音乐
        </a>
    </div>
</section>
                </div>
            </div>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
    </a>
</section>

</section>
<!--
Bootstrap
-->
<script src="/blog/Public/js/bootstrap.js">
</script>
<!--
App
-->
<script src="/blog/Public/js/app.js">
</script>
<!--
datarequire
-->
<script src="/blog/Public/js/parsley/parsley.min.js">
</script>
<script src="/blog/Public/js/parsley/parsley.extend.js">
</script>
<script src="/blog/Public/js/slimscroll/jquery.slimscroll.min.js">
</script>
<!--
file input
-->
<script src="/blog/Public/js/file-input/bootstrap-filestyle.min.js">
</script>
<!--
simditor
-->
<script type="text/javascript" src="/blog/Public/simditor/scripts/module.js">
</script>
<script type="text/javascript" src="/blog/Public/simditor/scripts/hotkeys.js">
</script>
<script type="text/javascript" src="/blog/Public/simditor/scripts/uploader.js">
</script>
<script type="text/javascript" src="/blog/Public/simditor/scripts/simditor.js">
</script>
<!--
iosAlert
-->
<script src="/blog/Public/js/iosAlert/iosOverlay.js">
</script>
<script src="/blog/Public/js/iosAlert/spin.min.js">
</script>
<script src="/blog/Public/js/iosAlert/prettify.js">
</script>
<script src="/blog/Public/js/iosAlert/custom.js">
</script>
</body>
</html>