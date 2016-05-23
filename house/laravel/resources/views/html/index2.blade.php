<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>eLearn - Home 2</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
    <!-- CSS Files -->
	<link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="plugin/animate.min.css" />
	<!-- / CSS Files -->
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('html.top')    <section class="slider-full-width">
    <div id="carousel-full" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-full" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-full" data-slide-to="1"></li>
            <li data-target="#carousel-full" data-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/slider_s1b.jpg" alt="" />
                <div class="container">
                    <div class="carousel-caption">
                        <p class="header animated" data-animation="fadeInUp" data-animation-delay="0.2s"><strong>学习</strong> 网上从各地通过 <strong>web</strong></p>
                       <p class="header header-small animated" data-animation="fadeInUp" data-animation-delay="0.8s">大约 <strong>12 000</strong> 来自<br />50 <strong>多个国家</strong> 正在翻译它</p>
                        <p class="buttons animated" data-animation="fadeIn" data-animation-delay="1.6s">
                            <a href="plans.htm" class="btn btn-theme btn-orange">开始</a>
                            <a href="video.htm" class="btn btn-theme btn-green"><i class="fa fa-play"></i> 看视频</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slider_s2b.jpg" alt="" />
                <div class="container">
                    <div class="carousel-caption">
                        <p class="header animated" data-animation="fadeInUp" data-animation-delay="0.2s"><strong>远程</strong> 从桌面控制 <strong>每一个地方</strong></p>
                        <p class="header header-small animated" data-animation="fadeInUp" data-animation-delay="0.8s">大约 <strong>12 000</strong> 来自<br />50 <strong>多个国家</strong> 正在翻译它</p>
                        <p class="buttons animated" data-animation="fadeIn" data-animation-delay="1.6s">
                            <a href="plans.htm" class="btn btn-theme btn-orange">开始</a>
                            <a href="plans.htm" class="btn btn-theme btn-green"><i class="fa fa-play"></i> 看定价</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slider_s3b.jpg" alt="" />
                <div class="container">
                    <div class="carousel-caption">
                        <p class="header text-right animated" data-animation="fadeInUp" data-animation-delay="0.2s"><strong>敬请关注</strong> 并得到观看 <strong>我们的视频</strong></p>
                        <p class="header header-small text-right animated" data-animation="fadeInUp" data-animation-delay="0.8s">大约 <strong>12 000</strong> 来自<br />50 <strong>多个国家</strong> 正在翻译他</p>
                        <p class="buttons text-right animated" data-animation="fadeIn" data-animation-delay="1.6s">
                            <a href="plans.htm" class="btn btn-theme btn-orange">现在开始</a>
                            <a href="video.htm" class="btn btn-theme btn-green"><i class="fa fa-play"></i> 看视频</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-full" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-full" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    </section>
    
    <section class="content content-light">
        <div class="container">
            <p class="header text-center"><strong>多么容易</strong> 我们的老师管理 <strong>业务</strong></p>
            <p class="text-center">我们相信您的公司和您的客户的分析是关键，有效地响应您的促销需求，我们将与您合作，以充分了解您的业务.</p>
            
            <hr class="invisible" />
            <hr class="invisible" />
            
            <!-- Profil create stage - dotted -->
            <div class="row profil-create-stage" id="create-stage-toggle">
                <div class="col-md-3 stage-first active">
                    <a href="#tab-register" data-toggle="tab">
                        <i class="fa fa-sign-in fa-4x"></i> <!-- OR fa-user -->
                        <span>登记的老师</span>
                        <span class="stage-dot"></span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#tab-upload" data-toggle="tab">
                        <i class="fa fa-upload fa-4x"></i> <!-- OR fa-cloud-upload -->
                        <span>上传视频</span>
                        <span class="stage-dot"></span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#tab-customize" data-toggle="tab">
                        <i class="fa fa-pencil-square-o fa-4x"></i> <!-- OR fa-cogs --> 
                        <span>自定义页面</span>
                        <span class="stage-dot"></span>
                    </a>
                </div>
                <div class="col-md-3 stage-last">
                    <a href="#tab-play" data-toggle="tab">
                        <i class="fa fa-play-circle fa-4x"></i> <!-- OR fa-youtube-play OR fa-play-circle-o -->
                        <span>让我们一起玩 TUT</span>
                        <span class="stage-dot"></span>
                    </a>
                </div>
            </div>
            
            <hr class="invisible" />
            <hr class="invisible" />
            
            <div class="tab-content">
                <div id="tab-register" class="tab-pane fade in active">
                    <p class="header text-center"><strong>我们</strong>的团队可以为你 <strong>做什么!</strong></p>
                    <p class="text-center">我们相信您的公司和您的客户的分析是关键，有效地响应您的促销需求，我们将与您合作，以充分了解您的业务.</p>
                </div>
                <div id="tab-upload" class="tab-pane fade">
                    <p class="header text-center"><strong>也许你</strong> ipsum dolor sit <strong>amet enim</strong></p>
                    <p class="text-center">Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna.</p>
                </div>
                <div id="tab-customize" class="tab-pane fade">
                    <p class="header text-center"><strong>Vestibulum</strong> commodo volutpat a <strong> convallis ac</strong></p>
                    <p class="text-center">Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi.</p>
                </div>
                <div id="tab-play" class="tab-pane fade">
                    <p class="header text-center"><strong>Aliquam</strong> erat ac ipsum <strong>aliquam purus</strong></p>
                    <p class="text-center">Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus.</p>
                </div>
            </div>
            
            <hr class="invisible" />
            <hr class="invisible" />
            <hr class="invisible" />
            <hr class="invisible" />
            
            <!-- Small boxes with text - 3 box in row -->
            <div class="row multi-box-row">
                <div class="col-md-4">
                    <h3><i class="fa fa-compass fa-2x pull-left text-green"></i> 寻找路径</h3>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-cloud fa-2x pull-left text-green"></i> 依云</h3>
                    <p>我们认为，分析你的公司和你的客户的关键是有效应对你的宣传性需要，我们将和你一起工作 .</p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-cogs fa-2x pull-left text-green"></i> 用户选项</h3>
                    <p>我们在代理多个不同的团队在不同的业务领域的专长，你可以确信你不会得到一个通用的服务.</p>
                </div>
            </div>
            <!-- Small boxes with text - 3 box in row -->
            <div class="row multi-box-row">
                <div class="col-md-4">
                    <h3><i class="fa fa-check-circle-o fa-2x pull-left text-green"></i> 任务栏滤波器</h3>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-clipboard fa-2x pull-left text-green"></i> 智能管理</h3>
                    <p>我们认为，分析你的公司和你的客户的关键是有效应对你的宣传性需要，我们将和你一起工作 .</p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-map-marker fa-2x pull-left text-green"></i>找到的位置</h3>
                    <p>我们在代理多个不同的团队在不同的业务领域的专长，你可以确信你不会得到一个通用的服务.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content content-dark">
        <div class="container">
            <p class="header text-white">关于 <strong>公司的</strong> 一些重要的事</p>
            
            <!-- Reel - number rotator -->
            <div class="row number-rotator">
                <div class="col-md-3">
                    <span class="number">22<span class="separator"></span></span>
                    <p class="text-white">创建教师</p>
                </div>
                <div class="col-md-3">
                    <span class="number">45<span class="separator"></span></span>
                    <p class="text-white">不同的类别</p>
                </div>
                <div class="col-md-3">
                    <span class="number">98<span class="separator"></span></span>
                    <p class="text-white">辅导服务</p>
                </div>
                <div class="col-md-3">
                    <span class="number">13<span class="separator"></span></span>
                    <p class="text-white">社交网络</p>
                </div>
            </div>

            <a href="register.htm" class="btn btn-theme btn-green">成为其中的一部分</a>
        </div>
    </section>
    
    <section class="content content-light">
        <div class="container">
            <p class="text-center header">那些 <strong>与我们快乐合作的</strong> 用户</p>
            <p class="text-center">我们相信您的公司和您的客户的分析是关键，有效地响应您的促销需求，我们将与您合作，以充分了解您的业务.</p>
            
            <hr class="invisible" />
            <hr class="invisible" />
            
            <!-- Client Logos -->
            <div class="row text-center client-logos">
                <div class="col-md-3">
                    <a href="#">
                        <img src="img/logo-bw.gif" alt="" />
                        <img src="img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="img/logo-bw.gif" alt="" />
                        <img src="img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="img/logo-bw.gif" alt="" />
                        <img src="img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="img/logo-bw.gif" alt="" />
                        <img src="img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
            </div>
            <div class="row text-center client-logos">
                <div class="col-md-3">
                    <a href="#">
                        <img src="img/logo-bw.gif" alt="" />
                        <img src="img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="img/logo-bw.gif" alt="" />
                        <img src="img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="img/logo-bw.gif" alt="" />
                        <img src="img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="img/logo-bw.gif" alt="" />
                        <img src="img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="main bg-dark-img">
        <section class="widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>关于我们</h4>
                    <p>关于天朝<br>联系我们</p>
                </div>
                <div class="col-md-3 footer-qlink">
                    <h4>网站帮助</h4>
					<p><a href="plans.htm">网站精品房屋</a><br><a href="categories.htm">网站指南</a><br><a href="contact.html">访客留言</a></p>
                </div>
                <div class="col-md-3 footer-blog">
                    <h4>Latest blogpostings</h4>
                    <ul class="media-list">
                        <li class="media">
                            <a class="pull-left" href="blog-post.htm"><img class="media-object img-rounded" src="img/64x64.gif" alt="author" /></a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="blog-post.htm">Stet clita kasd</a></h5>
                                <p>Lubergren, no sea...</p>
                               	<span class="footer"><time datetime="2014-01-09T22:11" class="cute-time">2014/01/09 22:11:19</time> by admin</span> <!-- attribute "datetime" is optional -->
                            </div>
                        </li>
                        <li class="media">
                            <a class="pull-left" href="blog-post.htm"><img class="media-object img-rounded" src="img/64x64.gif" alt="author" /></a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="blog-post.htm">Stet clita kasd</a></h5>
                                <p>Takimata sanctus est...</p>
                                <span class="footer"><time datetime="2013-12-29T20:12" class="cute-time">2013/12/29 20:12:38</time> by admin</span> <!-- attribute "datetime" is optional -->
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 footer-social">
                    <h4>跟随我们</h4>
                    <a class="btn btn-social social-facebook" href="https://www.facebook.com/pages/KL-Webmedia/131260293670757"><i class="fa fa-facebook"></i></a>
                    <!--<a class="btn-social social-vimeo" href="https://vimeo.com/"><i class="fa fa-vimeo"></i></a>-->
                    <a class="btn btn-social social-youtube" href="http://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                    <a class="btn btn-social social-twitter" href="https://twitter.com/KLWebmedia"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social social-gplus" href="https://plus.google.com/113174627408639682462/posts"><i class="fa fa-google-plus"></i></a>
                    <!--<a class="btn-social social-blogger" href="https://www.blogger.com/"><i class="fa fa-facebook"></i></a>-->
                    <a class="btn btn-social social-dribbble" href="http://dribbble.com/KL-Webmedia"><i class="fa fa-dribbble"></i></a>
                    <!--<a class="btn-social social-deviantart" href="http://kl-webmedia.deviantart.com/"><i class="fa fa-deviantart"></i></a>-->
                    <a class="btn btn-social social-linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                    <a class="btn btn-social social-tumblr" href="https://www.tumblr.com/"><i class="fa fa-tumblr"></i></a>
                    <!--<a class="btn-social social-flickr" href="http://www.flickr.com/"><i class="fa fa-flickr"></i></a>-->
                </div>
            </div>
        </div>
        </section>
     <!--    <section class="copyright">
            <div class="container"> &copy; Copyright 2014 <b>KL-Webmedia.com</b> &nbsp; | &nbsp; All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
            </div>
        </section> -->
    </footer>
    <!-- JavaScript Files -->
    <script src="plugin/jquery-1.10.2.min.js"></script>
    <script src="plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="script/animate.js"></script>
    <script src="plugin/jquery.cuteTime.min.js"></script>
    <script src="script/script.js"></script>
    <!-- / JavaScript Files -->
</body>
</html>