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
        <link rel="shortcut icon" href="/Blog/Public/images/favicon.ico">
        <link rel="stylesheet" href="/Blog/Public/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="/Blog/Public/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="/Blog/Public/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="/Blog/Public/css/simple-line-icons.css" type="text/css" />
        <link rel="stylesheet" href="/Blog/Public/css/font.css" type="text/css" />
        <link rel="stylesheet" href="/Blog/Public/css/app.css" type="text/css" />
        <link rel="stylesheet" href="/Blog/Public/js/datepicker/datepicker.css" type="text/css" />
        <link rel="stylesheet" href="/Blog/Public/css/index.css"/>
        <link media="all" rel="stylesheet" type="text/css" href="/Blog/Public/simditor/styles/simditor.css"/>
        <link rel="stylesheet" href="/Blog/Public/css/iosAlert/custom.css"/>
        <link rel="stylesheet" href="/Blog/Public/css/iosAlert/iosOverlay.css"/>
        <link rel="stylesheet" href="/Blog/Public/css/iosAlert/prettify.css"/>
        <link rel="shortcut icon" href="/Blog/Public/images.ico" type="image/x-icon" />
        <script src="/Blog/Public/js/jquery.min.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/js/angular.min.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/js/angular-route.min.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/js/angular-sanitize.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/js/ui-bootstrap-tpls-0.10.0.min.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/_static/home.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/_static/index.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/_static/php.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/_static/python.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/_static/frontend.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/_static/storage.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/_static/message.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/_static/news.js">
        </script>
        <script type="text/javascript" src="/Blog/Public/_static/detail.js">
        </script>
        <!--[if lt IE 9]>
            <script src="/Blog/Public/js/ie/html5shiv.js">
            </script>
            <script src="/Blog/Public/js/ie/respond.min.js">
            </script>
            <script src="/Blog/Public/js/ie/excanvas.js">
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

<section id="content">
    <section class="vbox">
        <section class="scrollable wrapper-lg">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-post">
                        <div class="post-item">
                            <div class="caption wrapper-lg">
                                <div class="post-sum" id="not-404">
                                    <p style="text-align: center;"><img src="/Blog/Public/images/404.png"><span style="font-size: 30px;color: #959d83">404 NOT Found</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
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
<script src="/Blog/Public/js/bootstrap.js">
</script>
<!--
App
-->
<script src="/Blog/Public/js/app.js">
</script>
<!--
datarequire
-->
<script src="/Blog/Public/js/parsley/parsley.min.js">
</script>
<script src="/Blog/Public/js/parsley/parsley.extend.js">
</script>
<script src="/Blog/Public/js/slimscroll/jquery.slimscroll.min.js">
</script>
<!--
file input
-->
<script src="/Blog/Public/js/file-input/bootstrap-filestyle.min.js">
</script>
<!--
simditor
-->
<script type="text/javascript" src="/Blog/Public/simditor/scripts/module.js">
</script>
<script type="text/javascript" src="/Blog/Public/simditor/scripts/hotkeys.js">
</script>
<script type="text/javascript" src="/Blog/Public/simditor/scripts/uploader.js">
</script>
<script type="text/javascript" src="/Blog/Public/simditor/scripts/simditor.js">
</script>
<!--
iosAlert
-->
<script src="/Blog/Public/js/iosAlert/iosOverlay.js">
</script>
<script src="/Blog/Public/js/iosAlert/spin.min.js">
</script>
<script src="/Blog/Public/js/iosAlert/prettify.js">
</script>
<script src="/Blog/Public/js/iosAlert/custom.js">
</script>
</body>
</html>