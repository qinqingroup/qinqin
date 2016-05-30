<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Bootstrap网格 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?= Yii::$app->request->baseUrl?>/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<style>
			.center {
	text-align:center;
}
.center [class*="col-"] {
	margin-top:2px;
	margin-bottom:2px;
	padding-top:4px;
	padding-bottom:4px;

	position:relative;
	text-overflow:ellipsis;
}
.center [class*="col-"]  span{
  position:relative;
  z-index:2;
	
  display: inline-block;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;

  width: 100%;
}
.center [class*="col-"]:before {
	position:absolute;
	top:0; bottom:0;
	left:2px; right:2px;
	content:"";
	display:block;
	border:1px solid #DDD;
	z-index: 1;
}

.center [class*="col-"]:hover:before {
	background-color:#FCE6A6;
	border-color:#EFD27A;
}
		</style>

		<!-- ace settings handler -->

		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/assets/js/html5shiv.js"></script>
		<script src="/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<?php include 'top.php';include 'main.php';?>

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Other Pages</a>
							</li>
							<li class="active">Grid</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Grid
								<small>
									<i class="icon-double-angle-right"></i>
									bootstrap grid sizing
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="center">
									<div class="row">
										<div class="col-xs-12">
											<span>.col-xs-12</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-1">
											<span>.col-xs-1</span>
										</div>

										<div class="col-xs-11">
											<span>.col-xs-11</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6 col-sm-2">
											<span>.col-xs-6.col-sm-2</span>
										</div>

										<div class="col-xs-6 col-sm-10">
											<span>.col-xs-6.col-sm-10</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12 col-lg-6">
											<span>.col-xs-12.col-lg-6</span>
										</div>

										<div class="col-xs-12 col-lg-6">
											<span>.col-xs-12.col-lg-6</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-4">
											<span>.col-xs-4</span>
										</div>

										<div class="col-xs-8">
											<span>.col-xs-8</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-5">
											<span>.col-xs-5</span>
										</div>

										<div class="col-xs-7">
											<span>.col-xs-7</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<span>.col-xs-6</span>
										</div>

										<div class="col-xs-6">
											<span>.col-xs-6</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-7">
											<span>.col-xs-7</span>
										</div>

										<div class="col-xs-5">
											<span>.col-xs-5</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-8">
											<span>.col-xs-8</span>
										</div>

										<div class="col-xs-4">
											<span>.col-xs-4</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-9">
											<span>.col-xs-9</span>
										</div>

										<div class="col-xs-3">
											<span>.col-xs-3</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-10">
											<span>.col-xs-10</span>
										</div>

										<div class="col-xs-2">
											<span>.col-xs-2</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-11">
											<span>.col-xs-11</span>
										</div>

										<div class="col-xs-1">
											<span>.col-xs-1</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12">
											<span>.col-xs-12</span>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!-- // <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->
<script src="<?php Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js>"></script>
		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?= Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?= Yii::$app->request->baseUrl?>/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/bootstrap.min.js"></script>
		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace-elements.min.js"></script>
		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
