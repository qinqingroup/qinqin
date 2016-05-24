<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>eLearn - Video</title>
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
                    <h1>天朝居房屋详情</h1>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index.htm">天朝居</a></li>
                        <li><a href="categories.htm">房屋精搜</a></li>
                        <li class="active">详情</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Video: film view -->
    <section class="content content-light  video-film">
        <div class="container">
            <!-- Video film view - center -->
            <div class="row">
                <div class="col-md-8">
                    <article>
                        <!-- Video film - player -->
                        <a href="http://www.youtube.com/v/9QscURRuF0g&amp;autoplay=1" class="video-prev video-play-here" style="height:350px; background-image:url('img/617x350.gif'); ">
                            
                            123
                        </a>
                        
                        <div class="video-content">
                            <p>handler has just finished his Graphic Design degree and enjoys continuing to learn from Monica and building his experience. Joey and Phoebe focus on bringing new business to the company. They have won a number of big clients recently and both also have qualifications in project management to ensure that the projects run smoothly from start to finish.</p>
                        </div>
                        
                        <hr class="invisible" />
                        <hr class="invisible" />
                       
                        <!--map地图接口   kkk-->
    <style type="text/css">
        #allmap {width: 700px;height: 500px;overflow: hidden;margin:0;font-family:"微软雅黑";}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=DG3WqndDm4nZMagFcRQ6oT7an9TKRzwf"></script>
    <div id="allmap"></div>
<p>点击标注点，可查看由纯文本构成的简单型信息窗口</p>
<script type="text/javascript">
   // 百度地图API功能
    var map = new BMap.Map("allmap");
    var point = new BMap.Point(116.417854,39.921988);
    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);              // 将标注添加到地图中
    map.centerAndZoom(point, 15);
    var opts = {
      width : 200,     // 信息窗口宽度
      height: 100,     // 信息窗口高度
      title : "海底捞王府井店" , // 信息窗口标题
      enableMessage:true,//设置允许信息窗发送短息
      message:"亲耐滴，晚上一起吃个饭吧？戳下面的链接看下地址喔~"
    }   
    var infoWindow = new BMap.InfoWindow("地址：北京市东城区王府井大街88号乐天银泰百货八层", opts);  // 创建信息窗口对象 
    marker.addEventListener("click", function(){          
        map.openInfoWindow(infoWindow,point); //开启信息窗口
    });
</script>
                        <!--map   end-->



                        <!-- Video - related -->
                        <section class="related">
                            <h2>类似房屋 </h2>
                            <div class="row  videos-list">
                                <article class="col-md-6  video-item">
                                    <a href="{{url('housiong')}}" >
										<img src="img/213x213.gif" style="width:300px;height:200px" class="img-rounded" alt="Chuck Dorothe" />
									</a>
									<br/>
                                    <p class="button-full"><a href="{{url('housiong')}}" class="btn btn-theme btn-green">天朝居房屋详情</a></p>
                                </article>
                                <article class="col-md-6  video-item">
                                    <a href="{{url('housiong')}}" >
										<img src="img/213x213.gif" style="width:300px;height:200px" class="img-rounded" alt="Chuck Dorothe" />
									</a>
									<br/>
                                    <p class="button-full"><a href="{{url('housiong')}}" class="btn btn-theme btn-green">天朝居房屋详情</a></p>
                                </article>
                            </div>
                            <div class="row">
                                <article class="col-md-6  video-item">
                                    <a href="{{url('housiong')}}" >
										<img src="img/213x213.gif" style="width:300px;height:200px" class="img-rounded" alt="Chuck Dorothe" />
									</a>
									<br/>
                                    <p class="button-full"><a href="{{url('housiong')}}" class="btn btn-theme btn-green">天朝居房屋详情</a></p>
                                </article>
                                <article class="col-md-6  video-item">
                                    <a href="{{url('housiong')}}" >
										<img src="img/213x213.gif" style="width:300px;height:200px" class="img-rounded" alt="Chuck Dorothe" />
									</a>
									<br/>
                                    <p class="button-full"><a href="{{url('housiong')}}" class="btn btn-theme btn-green">天朝居房屋详情</a></p>
                                </article>
                            </div>
                        </section>
                    </article>
                </div>
                <aside class="col-md-4">
                    <h2>北京市丰台区蒲黄榆芳城园</h2>
                    <p class="video-params">
                        价格: <h3><b><font color='red'>655$</font></b></h3>
                        户型: <b>俩室一厅一卫</b> <br />
                        类型: <b>精品房</b> <br />
                        地址: <b>西二旗南路</b> <br />
                        关注度: <b>15</b> <a href="#"><i class="fa fa-heart"></i></a>
                    </p>
                    <!--<p class="video-description">handler has just finished his Graphic Design degree and enjoys continuing to learn from Monica and building his experience. Joey and Phoebe focus on bringing new business to the company. They have won a number of big clients recently and both also have qualifications in project management to ensure that the projects run smoothly from start to finish.</p>-->
                    <div class="row buttons-margin-horizontal">
                        <div class="col-md-6 button-full">
                            <a class="btn btn-theme btn-red"><i class="fa fa-heart"></i> 喜欢</a>
                        </div>
                        <div class="col-md-6 button-full">
                            <a class="btn btn-theme btn-orange"><i class="fa fa-plus"></i> 收藏</a>
                        </div>

                      
                    </div>
                         <div class="row buttons-margin-horizontal">
                       
                        <div class="col-md-12 button-full">
                            <a class="btn btn-theme btn-green"><i class="fa fa-heart"></i> 我要订房</a>
                        </div>
                    </div>
                  
                       
                        </div>
                    </div>
                </aside>
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