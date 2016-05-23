<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>eLearn - Categories</title>
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
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>用户中心</h1>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index.htm">管理</a></li>
                        <li class="active">信息</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <section class="content content-light">
        <div class="container">
            <!-- Category boxes with icon & name -->
            <div class="row category-box-row">
                <div class="col-md-4">
                    <a href="{{url('headportrait')}}" class="category-box-item">
                        <i class="fa fa-camera fa-5x"></i>
                        <h2>头像</h2>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="videos-grid.htm" class="category-box-item">
                        <i class="fa fa-cogs fa-5x"></i>
                        <h2>修改密码</h2>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="videos-grid.htm" class="category-box-item">
                        <i class="fa fa-list-alt fa-5x"></i>
                        <h2>住过的房</h2>
                    </a>
                </div>
            </div>
            <!-- Category boxes with icon & name -->
            <div class="row category-box-row">
                <div class="col-md-4">
                    <a href="{{url('userlist')}}" class="category-box-item">
                        <i class="fa fa-female fa-5x"></i>
                        <h2>个人信息</h2>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="videos-grid.htm" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>我的订单</h2>
                    </a>
                </div>
                  <div class="col-md-4">
                    <a href="videos-grid.htm" class="category-box-item">
                        <i class="fa fa-list-alt fa-5x"></i>
                        <h2>收藏的房屋</h2>
                    </a>
                </div>
              
           
            <div class="col-md-4">
                    <a href="videos-grid.htm" class="category-box-item">
                        <i class="fa fa-signal fa-5x"></i>
                        <h2>我的评价</h2>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="videos-grid.htm" class="category-box-item">
                        <i class="fa fa-camera-retro fa-5x"></i>
                        <h2>钱包</h2>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="videos-grid.htm" class="category-box-item">
                        <i class="fa fa-wrench fa-5x"></i>
                        <h2>修改个人信息</h2>
                    </a>
                </div>

           </div>
            <!-- Category boxes with icon & name -->
            <div class="row category-box-row category-box-row-hidden"> 
                     
                <div class="col-md-4">
                    <a href="videos-grid.htm" class="category-box-item">
                        <i class="fa fa-wrench fa-5x"></i>
                        <h2>房东管理</h2>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="videos-grid.htm" class="category-box-item">
                        <i class="fa fa-female fa-5x"></i>
                        <h2>购买保险</h2>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="videos-grid.htm" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>优惠/打折</h2>
                    </a>
                </div>
             
            </div>
            
            <hr class="invisible" />
            
            <p class="text-center"><a href="#more" class="btn btn-theme btn-gray" id="loadCategoryMore">加载更多</a></p>
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