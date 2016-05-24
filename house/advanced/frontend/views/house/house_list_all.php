<?php 
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>房源信息展示</title>
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
								<a href="#">房源信息管理</a>
							</li>
							<li class="active">房源信息列表</li>

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
								信息管理
								<small>
									<i class="icon-double-angle-right"></i>
									<a href='index.php?r=house/show'>信息列表</a>
								</small> 
								<small>
								    <i class="icon-double-angle-right"></i>
                                	信息详细展示
								</small> 
							</h1>
						</div><!-- /.page-header -->

								<div class="row">
									<div class="col-xs-12">

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<tr>
                                                    <td>房屋id</td>
                                                    <td><?= $h_details['house_id'] ?></td>
                              
                                                    <td>房屋名称</td>
                                                    <td><?= $h_details['house_name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>房屋类型</td>
                                                    <td><?= $h_details['class_type'] ?></td>
                                          
                                                    <td>安全状态</td>
                                                    <td><?= $h_details['house_auth'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>上架情况</td>
                                                    <td><?php if($h_details['is_shelves']==1){
                                                                  echo '√';
                                                            }
                                                            else {
                                                            	  echo '×';
                                                            }?></td>
                                     
                                                    <td>房屋描述</td>
                                                    <td><?= $h_details['house_desc'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>房屋价格</td>
                                                    <td><?= $h_details['house_price'] ?></td>
                                            
                                                    <td>房屋地址</td>
                                                    <td><?= $h_details['house_address'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>房屋户型</td>
                                                    <td><?= $h_details['house_apartment'] ?></td>
                                          
                                                    <td>房屋审核状态</td>
                                                    <td><?php  if($h_details['house_state']==1){
														echo "正在审核中";
													}else if($h_details['house_state']==2){
														echo "审核已通过";
													}else if($h_details['house_state']==3){
														echo "审核未通过";
													} ?></td>
                                                </tr>
                                                <tr>
                                                    <td>是否精品</td>
                                                    <td><?php if($h_details['house_boutique']==1){
                                                                  echo '√';
                                                            }
                                                            else {
                                                            	  echo '×';
                                                            }?></td>
                                               
                                                    <td>是否活动</td>
                                                    <td><?php if($h_details['house_activity']==1){
                                                                  echo '√';
                                                            }
                                                            else {
                                                            	  echo '×';
                                                            }?></td>
                                                </tr>
                                                <tr>
                                                    <td>是否热品</td>
                                                    <td><?php if($h_details['house_heat']==1){
                                                                  echo '√';
                                                            }
                                                            else {
                                                            	  echo '×';
                                                            }?></td>
                                                     <td></td>
                                                     <td></td>
                                                </tr>
                                                <tr>
                                                     <td>房屋图片</td>
                                                     <td colspan='3'>
                                                     <?php foreach($p_details as $k=>$v){ 
	                                                         if($v['photo_url'])
	                                                         {        
                                                     ?>                                        
                                                        <img src='../web/uploads/<?= $v['photo_url']?>' height='100px' width='120px'>
                                                    <?php   
	                                                         }
	                                                         else 
                                                             {
                                                    ?>
                                                                                                                                           暂无
                                                    <?php 
                                                             	
                                                             }
                                                     }?>
                                                     </td>
                                                </tr>
											</table>



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

		<script src="<?php Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js>"></script></script>

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

		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/jquery.dataTables.min.js"></script>
		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/jquery.dataTables.bootstrap.js"></script>

		<!-- ace scripts -->

		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace-elements.min.js"></script>
		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

</body>
</html>
