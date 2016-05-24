<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>eLearn - Register</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
    <!-- CSS Files -->
	<link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.min.css" />
	<!-- / CSS Files -->
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    @include('html.top')
    <section class="content content-light">
        <div class="container">
            <!-- Profil create stage - dotted -->
            <form action="register.htm" role="form">
                <h2 class="title-form">欢迎登陆</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fieldInputUsername">用户名</label>
                            <input type="text" class="form-control input-lg" id="fieldInputUsername" placeholder="请输入你的用户名" />
                        </div>
                        <div class="form-group">
                            <label for="fieldInputPassword1">密码</label>
                            <input type="password" class="form-control input-lg" id="fieldInputPassword1" placeholder="请输入您的密码" />
                        </div>
                    </div>                                      
                </div>
                
                <hr class="invisible" />
                <hr class="invisible" />
                <h2 class="title-form">加入天朝社交</h2>
                
                <div class="form-inline">
                    <a class="btn btn-lg btn-social btn-gray social-facebook" href="#facebook"><i class="fa fa-facebook"></i></a>
                    <div class="form-group">
                        <input type="url" class="form-control input-social input-lg" id="fieldInputFacebook" placeholder="profile address URL" />
                    </div>
                    <a class="btn btn-lg btn-social btn-gray social-youtube" href="#youtube"><i class="fa fa-youtube"></i></a>
                    <div class="form-group">
                        <input type="url" class="form-control input-social input-lg" id="fieldInputYoutube" placeholder="profile address URL" />
                    </div>
                    <a class="btn btn-lg btn-social btn-gray social-twitter" href="#twitter"><i class="fa fa-twitter"></i></a>
                    <div class="form-group">
                        <input type="url" class="form-control input-social input-lg" id="fieldInputTwitter" placeholder="profile address URL" />
                    </div>
                    <a class="btn btn-lg btn-social btn-gray social-gplus" href="#gplus"><i class="fa fa-google-plus"></i></a>
                    <div class="form-group">
                        <input type="url" class="form-control input-social input-lg" id="fieldInputGplus" placeholder="profile address URL" />
                    </div>
                    <a class="btn btn-lg btn-social btn-gray social-dribbble" href="#dribbble"><i class="fa fa-dribbble"></i></a>
                    <div class="form-group">
                        <input type="url" class="form-control input-social input-lg" id="fieldInputDribbble" placeholder="profile address URL" />
                    </div>
                    <a class="btn btn-lg btn-social btn-gray social-linkedin" href="#linkedin"><i class="fa fa-linkedin"></i></a>
                    <div class="form-group">
                        <input type="url" class="form-control input-social input-lg" id="fieldInputLinkedin" placeholder="profile address URL" />
                    </div>
                    <a class="btn btn-lg btn-social btn-gray social-tumblr" href="#tumblr"><i class="fa fa-tumblr"></i></a>
                    <div class="form-group">
                        <input type="url" class="form-control input-social input-lg" id="fieldInputTumblr" placeholder="profile address URL" />
                    </div>
                </div>
                
                <hr class="invisible" />
                <hr class="invisible" />
                <hr class="invisible" />
                
                <p><input type="submit" class="btn btn-theme btn-orange" value="登陆" /> <input type="reset" class="btn btn-theme btn-green" value="取消" /></p>
            </form>
        </div>        
    </section>
    
    @include("html.footer");
    <!-- JavaScript Files -->
    <script src="plugin/jquery-1.10.2.min.js"></script>
    <script src="plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugin/jquery.cuteTime.min.js"></script>
    <script src="script/script.js"></script>
    <!-- / JavaScript Files -->
</body>
</html>