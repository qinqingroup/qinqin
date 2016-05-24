    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
<header class="main">
        <div class="container">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.htm"><img id="logo" src="img/logo.png" alt="eLearn"></a>
                </div>
                <div class="collapse navbar-collapse">
                <div class="navbar-right menu-main"> 
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown"><span>首页</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/')}}">Home, version 1</a></li>
                               </ul>
                        </li>
                        <li><a href="about-us.htm"><span>关于我们</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>相关房屋图片</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="videos-list.htm">纵列展示</a></li>
                                <li><a href="videos-grid.htm">网格装展示</a></li>
                                <li><a href="video.htm">房屋详情</a></li>
                            </ul>
                        </li>
                        <li><a href="features.htm"><span>房屋特点</span></a></li>
                        <li><a href="contact.htm"><span>联系我们</span></a></li>
                    </ul>
                    <a class="btn btn-theme navbar-btn btn-default sign-in" href="{{url('login')}}">登录</a>
                    <a class="btn btn-theme navbar-btn btn-orange  sign-up" href="{{url('reg')}}">注册</a>
                </div>
                </div>
            </nav>
        </div>
    </header>
        <!-- JavaScript Files -->
    <script src="plugin/jquery-1.10.2.min.js"></script>
    <script src="plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugin/jquery.cuteTime.min.js"></script>
    <script src="script/script.js"></script>