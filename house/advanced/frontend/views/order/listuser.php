<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>价格面板 - Bootstrap后台管理系统模版Ace下载</title>
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
		<link rel="shortcut icon" href="<?= \Yii::$app->request->baseUrl?>/assets/images/bitbug_favicon.ico"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/assets/js/html5shiv.js"></script>
		<script src="/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<?= $this->render('../index/top')?>
          <?= $this->render('../index/main')?>

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
								<a href="#">订单详情</a>
							</li>
							<li class="active">详情</li>
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
								订单管理
								<small>
									<i class="icon-double-angle-right"></i>
									订单详情
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box">
											<div class="widget-header header-color-dark">
												<h5 class="bigger lighter">Basic Package</h5>
											</div>

											<div class="widget-body">
												<?php foreach($row as $kk=>$vv ){ ?>
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
														<li>
															<i class="icon-ok green"></i>
																订单编号:<?php echo $vv['order_number'] ?>
														</li>

														<li>
															<i class="icon-ok green"></i>
																下单时间:<?php echo $vv['order_time'] ?>
														</li>

														<li>
															<i class="icon-ok green"></i>
															所组房屋:<?php echo $vv['house_id']['house_name'] ?>
														</li>

														<li>
															<i class="icon-ok green"></i>
															租户名:<?php echo $vv['u_id']['u_name'] ?>
														</li>

														<li>
															<i class="icon-remove red"></i>
														交易金额:<?php echo $vv['order_price'] ?>
														</li>

														<li>
															<i class="icon-ok green"></i>
															押金:<?php echo $vv['order_deposit'] ?>
														</li>
														<li>
															<i class="icon-remove red"></i>
															状态:
															<?php if($vv['order_state']==0){ ?>
											<span class="label label-sm label-inverse arrowed-in">未处理/看房中</span>
															<?php }elseif ($vv['order_state']==1) {?>
											 <span class="label label-sm label-warning">合作中</span>
															<?php }else{ ?>
											  <span class="label label-sm label-success">已完成</span>
															<?php } ?>
														</li>
													</ul>

													<hr />
													<div class="price">
														应收:<?php  echo $vv['order_price']*0.1; ?>
														<small>/RMB</small>
													</div>
												</div>

<?php  } ?>
												<div>
													<a href="#" class="btn btn-block btn-inverse">
														<i class="icon-shopping-cart bigger-110"></i>
														<span>Buy</span>
													</a>
												</div>
											</div>
										</div>
									</div>

		</div><!-- /.main-container -->

<!-- /.img--- -->

<div class="row" id='img' style="  position: absolute;right: 60px;top: 100px;">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row-fluid">
									<ul class="ace-thumbnails">
																		
									<?php foreach($img as $vv ){ ?>
															<li>
											<a href="assets/images/gallery/image-4.jpg" data-rel="colorbox" class="cboxElement">
												<img alt="300*200" style="width:300px;height:200px" src="img/<?php echo $vv['photo_url'] ?>">
												<div class="tags">
													<span class="label-holder">
														<span class="label label-info arrowed">fountain</span>
													</span>

													<span class="label-holder">
														<span class="label label-danger">recreation</span>
													</span>
												</div>
											</a>
											<div class="tools tools-top">
												<a href="#">
													<i class="icon-link"></i>
												</a>

												<a href="#">
													<i class="icon-paper-clip"></i>
												</a>

												<a href="#">
													<i class="icon-pencil"></i>
												</a>

												<a href="#">
													<i class="icon-remove red"></i>
												</a>
											</div>
										</li>
									
									<?php } ?>
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div>
									
<!-- /.imgend -->
		<!-- basic scripts -->

		<!--[if !IE]> -->

        <script src="<?php Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js>"></script>
		<!-- <![endif]-->

		<!--[if IE]>
        <script src="<?php Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js>"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?= Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?= Yii::$app->request->baseUrl?>/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
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
