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
            <div class="row profil-create-stage">
                <div class="col-md-4 stage-first">
                    <a href="plans.htm">
                        <span>选择您的风格</span>
                        <span class="stage-dot"></span>
                    </a>
                </div>
                <div class="col-md-4 active">
                    <a href="register.htm">
                        <span>注册您的身份</span>
                        <span class="stage-dot"></span>
                    </a>
                </div>
                <div class="col-md-4 stage-last">
                    <a href="register.htm">
                        <span>更新您的资料</span>
                        <span class="stage-dot"></span>
                    </a>
                </div>
            </div>
            
            <hr class="invisible" />
            <hr class="invisible" />
            <hr class="invisible" />
            
            <form action="register.htm" role="form">
                <h2 class="title-form">个人信息</h2>
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
                        <div class="form-group">
                            <label for="fieldSelectGender">国家</label>
                            <select class="form-control input-lg" id="fieldSelectGender">
                                <option></option>
                                <option>male</option>
                                <option>female</option>
                            </select>
                        </div>
						 <div class="form-group">
                            <label for="fieldInputPassword1">注册类型</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" id="fieldInputPassword1" value="出租" />出租&nbsp;&nbsp;
							<input type="radio"  id="fieldInputPassword1" value="租房" />租房
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fieldInputEmail1">邮箱地址</label>
                            <input type="email" class="form-control input-lg" id="fieldInputEmail1" placeholder="请输入您的邮箱地址" />
                        </div>
                        <div class="form-group">
                            <label for="fieldInputPassword2">确认密码</label>
                            <input type="password" class="form-control input-lg" id="fieldInputPassword2" placeholder="请保持和第一次密码一致" />
                        </div>
                        <div class="form-group">
                            <label for="fieldSelectCountry">省份</label>
                            <select class="form-control input-lg" id="fieldSelectCountry">
                                <option value="usa">United States</option>
                                <option value="uk">United Kingdom</option>
                                <option value="ger">Germany</option>
                                <option value="jap">Japan</option>
                                <option value="fra">France</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fieldInputBirth">身份证号</label>
                            <input type="email" class="form-control input-lg" id="fieldInputBirth" placeholder="请输入您的身份证号" />
                        </div>
                       
                        <div class="form-group">
                            <label for="fieldInputPostalcode">电话号码</label>
                            <input type="email" class="form-control input-lg" id="fieldInputPostalcode" placeholder="请输入您的电话号码" />
                        </div>
                        <div class="form-group">
                            <label for="fieldSelectCity">城市</label>
                            <select class="form-control input-lg" id="fieldSelectCity">
                                <option></option>
                                <option class="usa">New York City</option> <!-- class name = select#fieldSelectCountry | depend show/hide by JS -->
                                <option class="usa">Los Angeles</option>
                                <option class="usa">Chicago</option>
                                <option class="usa">Houston</option>
                                <option class="usa">Philadelphia</option>
                                <option class="usa">Washington, D.C.</option>
                                
                                <option class="uk">London</option>
                                <option class="uk">Manchester</option>
                                <option class="uk">Birmingham</option>
                                <option class="uk">Leeds</option>
                                <option class="uk">Glasgow</option>
                                
                                <option class="ger">Berlin</option>
                                <option class="ger">Hamburg</option>
                                <option class="ger">Munich</option>
                                <option class="ger">Cologne</option>
                                
                                <option class="jap">Tokyo</option>
                                <option class="jap">Yokohama</option>
                                <option class="jap">Osaka</option>
                                <option class="jap">Nagoya</option>
                                
                                <option class="fra">Paris</option>
                                <option class="fra">Marseille</option>
                                <option class="fra">Lyon</option>
                            </select>
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
                
                <p><input type="submit" class="btn btn-theme btn-orange" value="注册" /> <input type="reset" class="btn btn-theme btn-green" value="取消" /></p>
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