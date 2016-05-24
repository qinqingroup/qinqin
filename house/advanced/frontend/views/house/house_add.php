<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Bootstrap表单组件 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?=Yii::$app->request->baseUrl?>/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/chosen.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/datepicker.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/colorpicker.css" />

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		
		<!-- video styles -->
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/swfupload/swfupload.js" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/js/swfupload.queue.js" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/js/fileprogress.js" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/js/handlers.js" />
   
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
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
								<a href="#">房源信息管理</a>
							</li>

							<li>
								<a href="#">添加</a>
							</li>
							<li class="active">添加</li>
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
								信息管理
								<small>
									<i class="icon-double-angle-right"></i>
									添加
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" method='post' action='index.php?r=house/form' enctype="multipart/form-data">
								<?php $form = ActiveForm::begin([
										       'method'=>'post',
										       'action'=>['house/form'],
										       'options'=>['enctype'=>'multipart/form-data']    
										    ])?>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋名称： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋名称" class="col-xs-10 col-sm-5"  name='house_name'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋类型： </label>

										<div class="col-sm-2">
											<select class="form-control" id="form-field-select-1" name='class_id'>
									             <option >请选择...</option>
									               <?php foreach($arr as $k=>$v){?>
                                                      <option value="<?php echo $v['class_id']?>"><?php echo $v['class_type']?></option>
                                                   <?php }?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">是否上架： </label>

										<div class="col-sm-5">
											<label>
														<input name="form-field-radio" type="radio" class="ace" name='is_shelves' value='1'/>
														<span class="lbl">  是</span>
														<input name="form-field-radio" type="radio" class="ace" name='is_shelves' value='0'/>
														<span class="lbl">  否</span>
										   </label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">上传图片： </label>

										<div class="col-sm-5">
                                             <?= $form->field($model, 'photo_url[]')->fileInput(['multiple' => true]) ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">图片名称： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="图片名称" class="col-xs-10 col-sm-5"  name='photo_title'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">是否显示： </label>

										<div class="col-sm-5">
											<label>
														<input  type="radio" class="ace"  name='is_display' value='1'/>
														<span class="lbl">  是</span>
														<input  type="radio" class="ace"  name='is_display' value='0'/>
														<span class="lbl">  否</span>
										   </label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">是否启用轮播： </label>

										<div class="col-sm-5">
                                           <label>
														<input  type="radio" class="ace"  name='is_lunbo' value='1'/>
														<span class="lbl">  是</span>
														<input  type="radio" class="ace"  name='is_lunbo' value='0'/>
														<span class="lbl">  否</span>
										   </label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋安全： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋安全" class="col-xs-10 col-sm-5" name="house_auth" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋描述： </label>

										<div class="col-sm-5">
											<textarea class="form-control" id="form-field-8" placeholder="房屋描述 " name='house_desc'></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋价格： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋价格" class="col-xs-10 col-sm-5" name='house_price'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋地址： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋地址" class="col-xs-10 col-sm-5" name='house_address'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋户型： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋户型" class="col-xs-10 col-sm-5"  name='house_apartment'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋状态： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋状态" class="col-xs-10 col-sm-5" name='house_state'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋属性： </label>

										<div class="col-sm-5">
					
													<label>
														<input name="house_boutique" type="checkbox" class="ace"  value='1'/>
														<span class="lbl" >精品</span>
													</label>
													<label>
														<input name="house_activity" type="checkbox" class="ace" value='1'/>
														<span class="lbl" >活动</span>
													</label>
													<label>
														<input name="house_heat" type="checkbox" class="ace" />
														<span class="lbl">热品</span>
													</label>
													
										</div>
									</div>
								    <div class="form-group">
										<div id="header">
											<h1 id="logo"><a href="/">SWFUpload</a></h1>
											<div id="version">v2.2.0</div>
										</div>
										
									
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit" value='提交'>

											&nbsp; &nbsp; &nbsp;
											<input class="btn" type="reset" value='重置'>
										</div>
									</div>
						     <?php ActiveForm::end()?>
                         </form>
								

		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js>"></script>

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?=Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>


		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace.min.js"></script>

</body>
</html>
