<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>eLearn - Home 3</title>
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
    <header class="main bg-dark-img home-3">
        @include('html.top')
        
        
        <!-- Carousel with Animation -->
        <div id="carousel-anim" class="carousel slide" data-ride="carousel">
            <!-- indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-anim" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-anim" data-slide-to="1"></li>
                <li data-target="#carousel-anim" data-slide-to="2"></li>
            </ol>
            
            <!-- wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-caption">
                        <img src="img/index_home1.jpg" style="width:500px;heigth:500px" class="pull-right carousel-img-mobile" alt="" />
                        <p class="header animated" data-animation="fadeInUp" data-animation-delay="0.8s"><strong>天朝居</strong> 我们的 <strong>家</strong></p>
                        <br><p class="header header-small animated" data-animation="fadeInUp" data-animation-delay="0.5s">世间所有的 <strong>相遇</strong>都是久别重逢<br /><strong>All of the world</strong> meet is after<br> being apart a long<strong> time</strong></p>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-caption">
                        <img src="img/index_home2.jpg" style="width:500px;heigth:700px" class="pull-right carousel-img-monit" alt="" />
                        <p class="header animated" data-animation="fadeInUp" data-animation-delay="0.8s">让<strong><em>分享</em></strong>        和      <strong><em>信赖</em></strong><br> 悄然 <strong>发生</strong></p>
                        <p class="header header-small animated" data-animation="fadeInUp" data-animation-delay="1.5s"> <strong><em>1、</em>安全线上交易</strong> <br /><strong><em>2、</em>坚实保障后盾</strong><br /><strong><em>3、</em>点评积累信用</strong></p>
                       
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-caption">
                        <img src="img/index_home3.jpg" style="width:500px;heigth:700px" class="pull-right carousel-img-mobile" alt="" />
                        <p class="header animated" data-animation="fadeInUp" data-animation-delay="0.8s"><strong>欢迎</strong>来到  <strong>天朝的世界</strong></p>
                        <p class="header header-small animated" data-animation="fadeInUp" data-animation-delay="2.0s"> <strong>属于</strong> 我们的<br /><h3>故事</h3><br><h1>begin in a minute<h1></p>
                        
                    </div>
                </div>
                
            </div>
    
            <!-- controls -->
            <a class="left carousel-control" href="#carousel-anim" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-anim" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </header>
    
    <section class="container content content-light">
        <p class="header text-center">别住酒店，住<strong>天朝</strong> </p>
        <p class="text-center">选择我们没有错  给我们机会  给您信任</p>
        
        <hr class="invisible" />
        
        <!-- Pie Chart -->
        <div class="row pie-chart text-center">
            <a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="62"><span class="percent"></span></span>
					<p>海淀区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="72"><span class="percent"></span></span>
					<p>朝阳区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="75"><span class="percent"></span></span>
					<p>大兴区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="50"><span class="percent"></span></span>
					<p>丰台区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="50"><span class="percent"></span></span>
					<p>东城区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="30"><span class="percent"></span></span>
					<p>西城区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="50"><span class="percent"></span></span>
					<p>石景山区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="40"><span class="percent"></span></span>
					<p>门头沟区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="30"><span class="percent"></span></span>
					<p>房山区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="25"><span class="percent"></span></span>
					<p>通州区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="64"><span class="percent"></span></span>
					<p>顺义区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="2"><span class="percent"></span></span>
					<p>昌平区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="77"><span class="percent"></span></span>
					<p>怀柔区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="20"><span class="percent"></span></span>
					<p>平谷区热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="03"><span class="percent"></span></span>
					<p>密云县热租比例</p>
				</div>
			</a>
			<a href="{{url('index')}}">
				<div class="col-md-3">
					<span class="chart" data-percent="05"><span class="percent"></span></span>
					<p>延庆县热租比例</p>
				</div>	
			</a>
        </div>
    </section>  
    <section class="content content-light">
        <div class="container">
            <p class="header text-center"><strong>欢迎</strong> 来到 <strong>天朝居!</strong></p>
            <p class="text-center">身在天朝，如在家.</p>                     
            <div class="row our-team">
                <div class="col-md-3">
                    <figure>
                        <img src="img/213x213.gif" class="img-rounded" alt="Chuck Dorothe" />
                        <figcaption>房源1号 <em>Reduced room</em></figcaption>
                    </figure>
                    <p class="button-full"><a href="videos-list.htm" class="btn btn-theme btn-green" data-content="10 Tutorials" data-placement="bottom"><i class="fa fa-play"></i> 详情</a></p>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="img/213x213.gif" class="img-rounded" alt="Adam Sandler" />
                        <figcaption>房源2号 <em>Language Trainer</em></figcaption>
                    </figure>
                    <p class="button-full"><a href="videos-list.htm" class="btn btn-theme btn-green" data-content="15 Tutorials" data-placement="bottom"><i class="fa fa-play"></i> 详情</a></p>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="img/213x213.gif" class="img-rounded" alt="Susan Westwik" />
                         <figcaption>房源3号 <em>Marketing Manager</em></figcaption>
                    </figure>
                    <p class="button-full"><a href="videos-list.htm" class="btn btn-theme btn-green" data-content="23 Tutorials" data-placement="bottom"><i class="fa fa-play"></i> 详情</a></p>
                </div>
				<div class="col-md-3">
                    <figure>
                        <img src="img/213x213.gif" class="img-rounded" alt="Susan Westwik" />
                        <figcaption>房源4号 <em>Marketing Manager</em></figcaption>
                    </figure>
                    <p class="button-full"><a href="videos-list.htm" class="btn btn-theme btn-green" data-content="23 Tutorials" data-placement="bottom"><i class="fa fa-play"></i> 详情</a></p>
                </div>
            </div>
        </div>
    </section>
   @include("html.footer");
    <!-- JavaScript Files -->
    <script src="plugin/jquery-1.10.2.min.js"></script>
    <script src="plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="script/animate.js"></script>
    <script src="plugin/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="plugin/jquery.cuteTime.min.js"></script>
    <script src="script/script.js"></script>
    <!-- / JavaScript Files -->
</body>
</html>