<link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('/js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--menu-->
<link href="{{asset('/css/http _staticnew.mayi.com_resourcesWeb_v201510_css_index.css')}}"    rel="stylesheet" type="text/css" media="all" />
<script src="{{asset('/js/scripts.js')}}"></script>
<link href="{{asset('/css/styles.css')}}" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
<script src="{{asset('/js/responsiveslides.min.js')}}"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body >

<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
						<li><a  href="{{url('index/index')}}">首页</a></li>
						<li><a  href="{{url('index/about')}}">关于我们</a></li>
						<li><a  href="{{url('index/blog')}}">我们的博客</a></li>
						<li><a  href="{{url('index/terms')}}">我们的团队</a></li>
						<li><a  href="{{url('index/privacy')}}">我们的承诺</a></li>
						<li><a  href="{{url('index/contact')}}">与我们联系</a></li>
						<li><a  href="{{url('user')}}">个人中心</a></li>
					</ul>
				</nav>			
			</div>
		</div>

<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="{{url('index/index')}}">CHINA HOME</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav">
			<ul class="right-icons">
				<?php
					if(!empty($_COOKIE["name"])){
				?>
				<li><a  href="{{url('user')}}"><i class="glyphicon glyphicon-user"> </i><?php echo $_COOKIE["name"]?></a></li>
				<li><a  href="{{url('tui')}}"><i class="glyphicon glyphicon-user"> </i>退出</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
				<?php
					}else{
				?>
				<li><a  href="{{url('login')}}"><i class="glyphicon glyphicon-user"> </i>Login</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
				<?php
					}
				?>
			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="javascript:void(0)"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			--->
			</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
			   
				<link href="{{asset('/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
				<script src="{{asset('/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
			<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>搜索全部</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>搜索租房</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>搜索出租</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
						  <div class="resp-tabs-container">
						  		<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>搜索全部</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
								 	<div class="facts">
									  	<div class="login">
											<input type="text" value="搜索网站全部信息" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索网站全部信息';}">		
									 		<input type="submit" value="">
									 	</div>        
							        </div>
						  		</div>
							     <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>搜索租房</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">									
										<div class="login">
											<input type="text" value="搜索网站租房信息" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索网站租房信息';}">		
									 		<input type="submit" value="">
									 	</div> 
							        </div>	
								 </div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>搜索出租</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="facts">
										<div class="login">
											<input type="text" value="搜索网站出租信息" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索网站出租信息';}">		
									 		<input type="submit" value="">
									 	</div> 
							         </div>	
							    </div>
					      </div>
					 </div>
					 <script src="{{asset('/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
				    	<script type="text/javascript">
						    $(document).ready(function () {
						        $('#horizontalTab').easyResponsiveTabs({
						            type: 'default', //Types: default, vertical, accordion           
						            width: 'auto', //auto or any width like 600px
						            fit: true   // 100% fit in a container
						        });
						    });
			  			 </script>	
				</div>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//-->	
	<div class=" header-right">
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">		       
					 <li>
			          	 <div class="banner1">
			           		<div class="caption">
					          	<h3><span>世间所有的相遇</span>都是久别重逢</h3>
					          	<p>为这段隔世的重逢心生感动</p>
			          		</div>
			          	</div>
			         </li>
					 <li>
			          	 <div class="banner2">
			           		<div class="caption">
					          	<h3><span>三生石</span>是安排有缘人相遇的地方</h3>
					          	<p>和你在另一个地方遇见美好</p>
			          		</div>
			          	</div>
			         </li>
			         <li>
			          	 <div class="banner3">
			           		<div class="caption">
					          	<h3><span>灵魂宁静</span>如拂晓的幽兰</h3>
					          	<p>如同大自然一草一木的呼吸</p>
			          		</div>
			          	</div>
			         </li>		
			      </ul>
			  </div>
			</div>
		</div>
	</div>
	 
	<!--header-bottom-->
	<div class="banner-bottom-top">
			<div class="container">
			<div class="bottom-header">
				<div class="header-bottom">
					<div class=" bottom-head">
						<a href="{{url('House/index')}}">
							<div class="buy-media">
								<i class="buy"> </i>
								<h6>租房</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="{{url('about')}}">
							<div class="buy-media">
							<i class="rent"> </i>
							<h6>关于我们</h6>
							</div>
						</a>
					</div>
					
					<div class=" bottom-head">
						<a href="{{url('House/index')}}">
							<div class="buy-media">
							<i class="sell"> </i>
							<h6>热卖</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="{{url('House/index')}}">
							<div class="buy-media">
							<i class="loan"> </i>
							<h6>精品</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="{{url('House/index')}}">
							<div class="buy-media">
							<i class="apart"> </i>
							<h6>推荐</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="{{url('user')}}">
							<div class="buy-media">
							<i class="deal"> </i>
							<h6>个人中心</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="{{url('index/safe')}}">
							<div class="buy-media">
							<i class="pg"> </i>
							<h6>房屋保障</h6>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	</div>
			<!--//-->
				
	<!--//header-bottom-->
	
	
<!--//header-->