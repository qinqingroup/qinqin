<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>房源详情</title>
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
<header class="main bg-dark-img home-1">
    @include('html.top')
        <p class="header text-center text-white"><strong>很简单 </strong> 即点即租 </p>
        <!-- Screens -->
        <div class="screens animation-domready">
            <p>
                <img src="img/project/1.jpg" data-animation-delay="0.5s" style="width:700px;height:500px" data-animation="fadeInUp" class="animated" alt="" />
                <img src="img/project/2.jpg" data-animation-delay="1.5s" style="width:700px;height:500px" data-animation="fadeInUp" class="animated" alt="" />
                <img src="img/project/3.jpg" data-animation-delay="2.5s" style="width:700px;height:500px"  data-animation="fadeInUp" class="animated" alt="" />
            </p>
        </div>
    </div>
</header>

<section class="poweredby">
    <figure class="container">
        <div class="row text-center client-logos">
            <div class="col-md-3">



            </div>
        </div>
    </figure>
</section>

<div class="container content content-light home-1">
    <section class="row animation-scroll">
        <figure class="col-md-6 animated" data-animation="bounceInLeft"><img src="img/213x213.jpg" style="width:400px;height:300px" alt="" /></figure>
        <article class="col-md-6 animated" data-animation="bounceInRight">
            <h3><strong>在</strong> 翟斗号的 <strong>这间屋子....</strong></h3>
            <p>我们相信您一定会享受到家的感觉。 </p>
            <a href="{{url('housing')}}" class="link-more">查看房源详情  <i class="fa fa-arrow-right "></i></a>
        </article>
    </section>
    <section class="row animation-scroll">
        <article class="col-md-6 animated" data-animation="bounceInLeft">
            <h3><strong>在</strong> 翟斗号的 <strong>这间屋子....</strong></h3>
            <p>在Vero EOS等accusam et胡斯托铎多洛雷斯等EA再燃。保留clita kasd gubergren，没有海takimata Sanctus EST lorem ipsum dolor sit AMET。lorem ipsum dolor坐特，consetetur。 .</p>
            <a href="{{url('housing')}}" class="link-more">查看房源详情   <i class="fa fa-arrow-right "></i></a>
        </article>
        <figure class="col-md-6 animated" data-animation="bounceInRight"><img src="img/213x213.jpg" style="width:400px;height:300px"  alt="" /></figure>
    </section>
    <section class="row animation-scroll">
        <figure class="col-md-6 animated" data-animation="bounceInLeft"><img src="img/213x213.jpg" style="width:400px;height:300px"  alt="" /></figure>
        <article class="col-md-6 animated" data-animation="bounceInRight">
            <h3><strong>在</strong> 翟斗号的 <strong>这间屋子....</strong></h3>
            <p>我们相信您的公司和您的客户的分析是关键，有效地响应您的促销需求，我们将与您合作，以充分了解您的业务.</p>
            <a href="{{url('housing')}}" class="link-more">查看房源详情   <i class="fa fa-arrow-right "></i></a>
        </article>
    </section>
    <section class="row animation-scroll">
        <article class="col-md-6 animated" data-animation="bounceInLeft">
            <h3><strong>在</strong> 翟斗号的 <strong>这间屋子....</strong></h3>
            <p>在Vero EOS等accusam et胡斯托铎多洛雷斯等EA再燃。保留clita kasd gubergren，没有海takimata Sanctus EST lorem ipsum dolor sit AMET。lorem ipsum dolor坐特，consetetur。 </p>
            <a href="{{url('housing')}}" class="link-more">查看房源详情   <i class="fa fa-arrow-right "></i></a>
        </article>
        <figure class="col-md-6 animated" data-animation="bounceInRight"><img src="img/213x213.jpg" style="width:400px;height:300px"  alt="" /></figure>
    </section>
<div class="tcdPageCode">
</div>
</div>

<div class="copyrights">收集 <a href="http://www.cssmoban.com/" >企业网站模板</a></div>

@include("html.footer");
<!-- JavaScript Files -->
<script src="plugin/jquery-1.10.2.min.js"></script>
<script src="plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="script/animate.js"></script>
<script src="plugin/jquery.cuteTime.min.js"></script>
<script src="script/script.js"></script>

<script src="script/jquery-1.8.3.min.js"></script>
<script src="script/jquery.page.js"></script>
<script>
    $(".tcdPageCode").createPage({
        pageCount:2,  //
        current:1,
        backFn:function(p){
            console.log(p);
        }
    });
</script>
<!-- / JavaScript Files -->
</body>
</html>