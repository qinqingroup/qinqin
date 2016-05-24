<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>eLearn - Contact us</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
    <!-- CSS Files -->
	<link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.min.css" />
</head>
<body>
    <header class="main">
         @include('html.top')
    </header>
    <section class="content content-light">
        <div class="container">
            <p class="header text-center">不要害怕 <strong>与人接触!</strong></p>
            
            <hr class="invisible" />
            <hr class="invisible" />
            
            <!-- Contact form -->
            <form action="register.htm" class="contact-form" role="form">
                <h2 class="title-form">联系方式</h2>
				
                <div class="row">
				
                    <div class="col-md-6">
						
						<div class="form-group">
						<table>
							<tr>
								<td>用户名</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							@foreach($user as $v)
								<tr>
									<td>{{$v->u_name}}</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							@endforeach
						</table>
                        </div>
                       
                    </div>
                  
                </div>
				
               <!-- <p class="text-right buttons-margin-horizontal">
                    <input type="reset" class="btn btn-theme btn-gray" value="重置" />
                    <input type="submit" class="btn btn-theme btn-green" value="发送信息" />
                </p>-->
            </form>
            
            <hr class="invisible" />
            <hr class="invisible" />
            <hr class="invisible" />
            
            <p class="header text-center">你喜欢 <strong>我</strong> 们么?那么开始<strong>跟随我们!</strong></p>
            <p class="text-center">让我们从世界各地开始，迎接来自世界各地的许多优秀人才.</p>
            
            <hr class="invisible" />
            <hr class="invisible" />
            
            <!-- Social large buttons -->
            <div class="row">
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-facebook" href="https://www.facebook.com/pages/KL-Webmedia/131260293670757"><i class="fa fa-facebook"></i></a></p>
                    <p class="text-center"><a class="social-facebook-text" href="https://www.facebook.com/pages/KL-Webmedia/131260293670757"> Facebook上联系我们</a></p>
                </div>
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-gplus" href="https://plus.google.com/113174627408639682462/"><i class="fa fa-google-plus"></i></a></p>
                    <p class="text-center"><a class="social-gplus-text" href="https://plus.google.com/113174627408639682462/">Google+上联系我们</a></p>
                </div>
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-twitter" href="https://twitter.com/KLWebmedia"><i class="fa fa-twitter"></i></a></p>
                    <p class="text-center"><a class="social-twitter-text" href="https://twitter.com/KLWebmedia">Twitter上联系我们</a></p>
                </div>
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-dribbble" href="http://dribbble.com/KL-Webmedia"><i class="fa fa-dribbble"></i></a></p>
                    <p class="text-center"><a class="social-dribbble-text" href="http://dribbble.com/KL-Webmedia">Dribbble上联系我们</a></p>
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
                    <h4>康塔克特博客</h4>
                    <ul class="media-list">
                        <li class="media">
                            <a class="pull-left" href="blog-post.htm"><img class="media-object img-rounded" src="img/64x64.gif" alt="author" /></a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="blog-post.htm">保留城市</a></h5>
                                <p>Lubergren, no sea...</p>
                               	<span class="footer"><time datetime="2014-01-09T22:11" class="cute-time">2014/01/09 22:11:19</time> 管理员</span> <!-- attribute "datetime" is optional -->
                            </div>
                        </li>
                        <li class="media">
                            <a class="pull-left" href="blog-post.htm"><img class="media-object img-rounded" src="img/64x64.gif" alt="author" /></a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="blog-post.htm">保留城市</a></h5>
                                <p>Takimata sanctus est...</p>
                                <span class="footer"><time datetime="2013-12-29T20:12" class="cute-time">2013/12/29 20:12:38</time> 管理员</span> <!-- attribute "datetime" is optional -->
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
       
    </footer>
    <!-- JavaScript Files -->
    <script src="plugin/jquery-1.10.2.min.js"></script>
    <script src="plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugin/jquery.cuteTime.min.js"></script>
    <script src="script/script.js"></script>
    <!-- / JavaScript Files -->
</body>
</html>