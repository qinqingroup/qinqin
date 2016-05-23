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
								<a href="#">More Pages</a>
							</li>
							<li class="active">Pricing Tables</li>
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
								Pricing Tables
								<small>
									<i class="icon-double-angle-right"></i>
									Large &amp; Small
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
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
														<li>
															<i class="icon-ok green"></i>
															10 GB Disk Space
														</li>

														<li>
															<i class="icon-ok green"></i>
															200 GB Bandwidth
														</li>

														<li>
															<i class="icon-ok green"></i>
															100 Email Accounts
														</li>

														<li>
															<i class="icon-ok green"></i>
															10 MySQL Databases
														</li>

														<li>
															<i class="icon-ok green"></i>
															$10 Ad Credit
														</li>

														<li>
															<i class="icon-remove red"></i>
															Free Domain
														</li>
													</ul>

													<hr />
													<div class="price">
														$5
														<small>/month</small>
													</div>
												</div>

												<div>
													<a href="#" class="btn btn-block btn-inverse">
														<i class="icon-shopping-cart bigger-110"></i>
														<span>Buy</span>
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box">
											<div class="widget-header header-color-orange">
												<h5 class="bigger lighter">Starter Package</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
														<li>
															<i class="icon-ok green"></i>
															50 GB Disk Space
														</li>

														<li>
															<i class="icon-ok green"></i>
															1 TB Bandwidth
														</li>

														<li>
															<i class="icon-ok green"></i>
															1000 Email Accounts
														</li>

														<li>
															<i class="icon-ok green"></i>
															100 MySQL Databases
														</li>

														<li>
															<i class="icon-ok green"></i>
															$25 Ad Credit
														</li>

														<li>
															<i class="icon-ok green"></i>
															Free Domain
														</li>
													</ul>

													<hr />
													<div class="price">
														$10
														<small>/month</small>
													</div>
												</div>

												<div>
													<a href="#" class="btn btn-block btn-warning">
														<i class="icon-shopping-cart bigger-110"></i>
														<span>Buy</span>
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box">
											<div class="widget-header header-color-blue">
												<h5 class="bigger lighter">Business Package</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
														<li>
															<i class="icon-ok green"></i>
															200 GB Disk Space
														</li>

														<li>
															<i class="icon-ok green"></i>
															Unlimited Bandwidth
														</li>

														<li>
															<i class="icon-ok green"></i>
															1000 Email Accounts
														</li>

														<li>
															<i class="icon-ok green"></i>
															200 MySQL Databases
														</li>

														<li>
															<i class="icon-ok green"></i>
															$25 Ad Credit
														</li>

														<li>
															<i class="icon-ok green"></i>
															Free Domain
														</li>
													</ul>

													<hr />
													<div class="price">
														$15
														<small>/month</small>
													</div>
												</div>

												<div>
													<a href="#" class="btn btn-block btn-primary">
														<i class="icon-shopping-cart bigger-110"></i>
														<span>Buy</span>
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box">
											<div class="widget-header header-color-green">
												<h5 class="bigger lighter">Ultimate Package</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
														<li>
															<i class="icon-ok green"></i>
															Unlimited Space
														</li>

														<li>
															<i class="icon-ok green"></i>
															Unlimited Bandwidth
														</li>

														<li>
															<i class="icon-ok green"></i>
															Unlimited Email Accounts
														</li>

														<li>
															<i class="icon-ok green"></i>
															Unlimited MySQL Databases
														</li>

														<li>
															<i class="icon-ok green"></i>
															$50 Ad Credit
														</li>

														<li>
															<i class="icon-ok green"></i>
															2 Free Domains
														</li>
													</ul>

													<hr />
													<div class="price">
														$25
														<small>/month</small>
													</div>
												</div>

												<div>
													<a href="#" class="btn btn-block btn-success">
														<i class="icon-shopping-cart bigger-110"></i>
														<span>Buy</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="space-24"></div>
								<h3 class="header smaller red">Small Style</h3>

								<div class="row">
									<div class="col-xs-4 col-sm-3 pricing-span-header">
										<div class="widget-box transparent">
											<div class="widget-header">
												<h5 class="bigger lighter">Package Name</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<ul class="list-unstyled list-striped pricing-table-header">
														<li>Disk Space </li>
														<li>Bandwidth </li>
														<li>Email Accounts </li>
														<li>MySQL Databases </li>
														<li>Ad Credit </li>
														<li>Free Domain </li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-8 col-sm-9 pricing-span-body">
										<div class="pricing-span">
											<div class="widget-box pricing-box-small">
												<div class="widget-header header-color-red3">
													<h5 class="bigger lighter">Basic</h5>
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<ul class="list-unstyled list-striped pricing-table">
															<li> 10 GB </li>
															<li> 200 GB </li>
															<li> 100 </li>
															<li> 10 </li>
															<li> $10 </li>

															<li>
																<i class="icon-remove red"></i>
															</li>
														</ul>

														<div class="price">
															<span class="label label-lg label-inverse arrowed-in arrowed-in-right">
																$5
																<small>/month</small>
															</span>
														</div>
													</div>

													<div>
														<a href="#" class="btn btn-block btn-sm btn-danger">
															<span>Buy</span>
														</a>
													</div>
												</div>
											</div>
										</div>

										<div class="pricing-span">
											<div class="widget-box pricing-box-small">
												<div class="widget-header header-color-orange">
													<h5 class="bigger lighter">Starter</h5>
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<ul class="list-unstyled list-striped pricing-table">
															<li> 50 GB </li>
															<li> 1 TB </li>
															<li> 1000 </li>
															<li> 100 </li>
															<li> $25 </li>

															<li>
																<i class="icon-ok green"></i>
																1
															</li>
														</ul>

														<div class="price">
															<span class="label label-lg label-inverse arrowed-in arrowed-in-right">
																$10
																<small>/month</small>
															</span>
														</div>
													</div>

													<div>
														<a href="#" class="btn btn-block btn-sm btn-warning">
															<span>Buy</span>
														</a>
													</div>
												</div>
											</div>
										</div>

										<div class="pricing-span">
											<div class="widget-box pricing-box-small">
												<div class="widget-header header-color-blue">
													<h5 class="bigger lighter">Business</h5>
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<ul class="list-unstyled list-striped pricing-table">
															<li> 200 GB </li>
															<li> Unlimited </li>
															<li> 1000 </li>
															<li> 200 </li>
															<li> $25 </li>

															<li>
																<i class="icon-ok green"></i>
																1
															</li>
														</ul>

														<div class="price">
															<span class="label label-lg label-inverse arrowed-in arrowed-in-right">
																$15
																<small>/month</small>
															</span>
														</div>
													</div>

													<div>
														<a href="#" class="btn btn-block btn-sm btn-primary">
															<span>Buy</span>
														</a>
													</div>
												</div>
											</div>
										</div>

										<div class="pricing-span">
											<div class="widget-box pricing-box-small">
												<div class="widget-header header-color-green">
													<h5 class="bigger lighter">Unlimited</h5>
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<ul class="list-unstyled list-striped pricing-table">
															<li> Unlimited </li>
															<li> Unlimited </li>
															<li> Unlimited </li>
															<li> Unlimited </li>
															<li> $50 </li>

															<li>
																<i class="icon-ok green"></i>
																2
															</li>
														</ul>

														<div class="price">
															<span class="label label-lg label-inverse arrowed-in arrowed-in-right">
																$25
																<small>/month</small>
															</span>
														</div>
													</div>

													<div>
														<a href="#" class="btn btn-block btn-sm btn-success">
															<span>Buy</span>
														</a>
													</div>
												</div>
											</div>
										</div>

										<div class="pricing-span">
											<div class="widget-box pricing-box-small">
												<div class="widget-header header-color-grey">
													<h5 class="bigger lighter">Extreme</h5>
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<ul class="list-unstyled list-striped pricing-table">
															<li> Unlimited </li>
															<li> Unlimited </li>
															<li> Unlimited </li>
															<li> Unlimited </li>
															<li> $100 </li>

															<li>
																<i class="icon-ok green"></i>
																3
															</li>
														</ul>

														<div class="price">
															<span class="label label-lg label-inverse arrowed-in arrowed-in-right">
																$30
																<small>/month</small>
															</span>
														</div>
													</div>

													<div>
														<a href="#" class="btn btn-block btn-sm btn-grey">
															<span>Buy</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
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
