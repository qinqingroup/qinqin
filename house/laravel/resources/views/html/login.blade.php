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
</head>
<body>
    @include('html.top')
    <section class="content content-light">
        <div class="container">
            <!-- Profil create stage - dotted -->
            <form action="{{url('logins')}}" role="form" method="post">
                <h2 class="title-form">欢迎登陆</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fieldInputUsername">用户名</label>
                            <input type="text" class="form-control input-lg" name="u_name" id="fieldInputUsername" placeholder="请输入你的用户名" />
                        </div>
                        <div class="form-group">
                            <label for="fieldInputPassword1">密码</label>
                            <input type="password" class="form-control input-lg" name="u_pwd" id="fieldInputPassword1" placeholder="请输入您的密码" />
                        </div>
                    </div>                                      
                </div> 
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