<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>文字排版 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?= Yii::$app->request->baseUrl?>/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!--<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/prettify.css" />-->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/html5shiv.js"></script>
		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<!-- top satrt -->
		<?php include 'top.php';include 'main.php';?>
					<!-- nav end -->

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
							<li class="active">Typography</li>
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
								Typography
								<small>
									<i class="icon-double-angle-right"></i>
									This is page-header (.page-header &gt; h1)
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-sm-6">
										<h4>Headings & Paragraphs</h4>

										<hr />
										<h1>h1. Heading </h1>
										<p class="lead">
											Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
										</p>
										<h2>h2. Heading 2</h2>
										<p>
											Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
										</p>
										<h3>h3. Heading 3</h3>
										<p>
											Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
										</p>
										<h4>h4. Heading 4</h4>
										<h5>h5. Heading 5</h5>
										<h6>h6. Heading 6</h6>
									</div><!-- /span -->

									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header widget-header-flat">
												<h4>Lists</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="row">
														<div class="col-sm-6">
															<ul>
																<li>Unordered List Item</li>

																<li>
																	<small>List Item in small tag</small>
																</li>

																<li>
																	<b>List Item in bold tag</b>
																</li>

																<li>
																	<i>List Item in italics tag</i>
																</li>

																<li>
																	<ul class="list-unstyled">
																		<li>
																			<i class="icon-caret-right blue"></i>
																			Nested List Item
																		</li>

																		<li>
																			<i class="icon-caret-right blue"></i>
																			Nested List Item
																		</li>

																		<li>
																			<i class="icon-caret-right blue"></i>
																			Nested List Item
																		</li>
																	</ul>
																</li>
																<li>Unordered List Item which is a longer item and may break into more lines.</li>

																<li>
																	<strong>List Item in strong tag</strong>
																</li>

																<li>
																	<em>List Item in emphasis tag</em>
																</li>
															</ul>
														</div>

														<div class="col-sm-6">
															<ol>
																<li>Ordered List Item</li>
																<li class="text-primary">.text-primary Ordered List Item</li>
																<li class="text-danger">.text-danger Ordered List Item</li>

																<li class="text-success">
																	<b>.text-success</b>
																	Ordered List Item
																</li>
																<li class="text-warning">.text-warning Ordered List Item</li>
																<li class="text-muted">.text-muted Ordered List Item</li>
															</ol>
														</div>
													</div>

													<hr />
													<div class="row">
														<div class="col-xs-12">
															<ul class="list-unstyled spaced">
																<li>
																	<i class="icon-bell bigger-110 purple"></i>
																	List with custom icons and more space
																</li>

																<li>
																	<i class="icon-ok bigger-110 green"></i>
																	Unordered List Item # 2
																</li>

																<li>
																	<i class="icon-remove bigger-110 red"></i>
																	Unordered List Item # 3
																</li>
															</ul>

															<ul class="list-unstyled spaced2">
																<li>
																	<i class="icon-circle green"></i>
																	Even more space
																</li>

																<li class="text-warning bigger-110 orange">
																	<i class="icon-warning-sign"></i>
																	Unordered List Item # 5
																</li>

																<li class="muted">
																	<i class="icon-angle-right bigger-110"></i>
																	Unordered List Item # 6
																</li>

																<li>
																	<ul class="list-inline">
																		<li>
																			<i class="icon-share-alt green bigger-110"></i>
																			Inline List Item # 
																		</li>
																		<li>List Item # 2</li>
																		<li>List Item # 3</li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- /span -->
								</div>

								<hr />
								<div class="row">
									<div class="col-sm-4">
										<div class="widget-box">
											<div class="widget-header widget-header-flat">
												<h4 class="smaller">
													<i class="icon-quote-left smaller-80"></i>
													BlockQuote & Address
												</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="row">
														<div class="col-xs-12">
															<blockquote class="pull-right">
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

																<small>
																	Someone famous
																	<cite title="Source Title">Source Title</cite>
																</small>
															</blockquote>
														</div>
													</div>

													<div class="row">
														<div class="col-xs-12">
															<blockquote>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

																<small>
																	Someone famous
																	<cite title="Source Title">Source Title</cite>
																</small>
															</blockquote>
														</div>
													</div>

													<hr />
													<address>
														<strong>Twitter, Inc.</strong>

														<br />
														795 Folsom Ave, Suite 600
														<br />
														San Francisco, CA 94107
														<br />
														<abbr title="Phone">P:</abbr>
														(123) 456-7890
													</address>

													<address>
														<strong>Full Name</strong>

														<br />
														<a href="mailto:#">first.last@example.com</a>
													</address>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-8">
										<div class="row">
											<div class="col-xs-12">
												<div class="widget-box">
													<div class="widget-header widget-header-flat">
														<h4 class="smaller">Definition List</h4>

														<div class="widget-toolbar">
															<label>
																<small class="green">
																	<b>Horizontal</b>
																</small>

																<input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
																<span class="lbl"></span>
															</label>
														</div>
													</div>

													<div class="widget-body">
														<div class="widget-main">
															<code class="pull-right" id="dt-list-code">&lt;dl&gt;</code>

															<dl id="dt-list-1">
																<dt>Description lists</dt>
																<dd>A description list is perfect for defining terms.</dd>
																<dt>Euismod</dt>
																<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
																<dd>Donec id elit non mi porta gravida at eget metus.</dd>
																<dt>Malesuada porta</dt>
																<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
																<dt>Felis euismod semper eget lacinia</dt>
																<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="row">
											<div class="col-xs-12">
												<div class="widget-box">
													<div class="widget-header widget-header-flat">
														<h4 class="smaller">
															<i class="icon-code"></i>
															Code view
														</h4>
													</div>

													<div class="widget-body">
														<div class="widget-main">
															<pre class="prettyprint linenums">&lt;p class="muted"&gt;Fusce dapibus, tellus ac cursus commodo.&lt;/p&gt;
&lt;p class="text-warning"&gt;Etiam porta sem malesuada.&lt;/p&gt;
&lt;p class="text-error"&gt;Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
&lt;p class="text-info"&gt;Aenean eu leo quam.&lt;/p&gt;
&lt;p class="text-success"&gt;Duis mollis.&lt;/p&gt;</pre>
														</div>
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
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/bootstrap.min.js"></script>
		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--<script src="<?=Yii::$app->request->baseUrl?>/assets/js/prettify.js"></script>-->

		<!-- ace scripts -->

		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace-elements.min.js"></script>
		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
			
				window.prettyPrint && prettyPrint();
				$('#id-check-horizontal').removeAttr('checked').on('click', function(){
					$('#dt-list-1').toggleClass('dl-horizontal').prev().html(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
				});
			
			})
		</script>
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
