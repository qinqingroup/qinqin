<?php

use yii\widgets\LinkPager;


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>China home后台管理系统</title>

		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?= Yii::$app->request->baseUrl?>/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/datepicker.css" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ui.jqgrid.css" />

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ace-skins.min.css" />
		<link rel="shortcut icon" href="<?= \Yii::$app->request->baseUrl?>/assets/images/bitbug_favicon.ico"/>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/html5shiv.js"></script>
		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/respond.min.js"></script>
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
								<a href="#">Tables</a>
							</li>
							<li class="active">Extension</li>
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
								China home
								<small>
									<i class="icon-double-angle-right"></i>
									Extension list
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								
								<div class="row">
                                    <div class="col-xs-12">
                                        <div class="table-responsive">
                                        
				<?php
				use yii\helpers\Html;
				use yii\widgets\ActiveForm;

				$form = ActiveForm::begin([
					'options' => ['class' => 'form-horizontal','enctype' => 'multipart/form-data'],
					'action' => ['extension/sphinx'],
					"method" => "post",
				]) ?>
				<input type="text" name="key"> 
				<button class="btn" type="reset">
					<i class="icon-undo bigger-110"></i>
					<?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>								
				</button>
				<?php ActiveForm::end() ?>
				
                                        <table id="sample-table-1" class="table table-striped table-bordered table-hover">

                                                    <tr>
                                                        <th>ID</th>
                                                        <th>规模</th>
                                                        <th>所处地段</th>
                                                        <th>发布时间</th>
                                                        <th>联系邮箱</th>
                                                        <th>信息来源</th>
					    <th>有效证件</th>
					    <th>操作</th>
                                                    </tr>
                                                <?php foreach($row as  $k=>$v){ ?>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /><?php  echo $v['ext_id'] ?></td>
                                                          <td><?php  echo $v['ext_title'] ?></td>
                                                        <td><?php  echo $v['ext_content'] ?></td>
                                                        <td><?php  echo date('Y-m-d',(int)($v['ext_time'])) ?></td>
                                                        <td><?php  echo $v['ext_url'] ?></td>
                                                        <td><?php  echo $v['ext_source'] ?></td>
														<td><img height='50' src="<?= Yii::$app->request->baseUrl?>/uploads/<?php echo $v['ext_img']?>"></td>
                                                        <td> <a href="index.php?r=extension/del&id=<?php  echo $v['ext_id'] ?>">
                                                        <button class="btn btn-xs btn-danger">
                                                          <i class="icon-trash bigger-120"></i>
                                                                </button></a></td>
                                                    </tr>
                                                    <?php } ?>

                                                </table>
                                                <?= LinkPager::widget(['pagination' => $pagination]) ?>

                                        </div><!-- /.table-responsive -->
                                    </div><!-- /span -->
                                </div><!-- /row -->
						


								
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

		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
		<script src="<?php Yii::$app->request->baseUrl?>/advanced/frontend/web/assets/js/jquery-2.0.3.min.js"></script>

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

		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/jqGrid/jquery.jqGrid.min.js"></script>
		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/jqGrid/i18n/grid.locale-en.js"></script>

		<!-- ace scripts -->

		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace-elements.min.js"></script>
		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			
			jQuery(function($) {
				var grid_selector = "#grid-table";
				var pager_selector = "#grid-pager";
			
			
				//enable search/filter toolbar
				//jQuery(grid_selector).jqGrid('filterToolbar',{defaultSearch:true,stringResult:true})
			
				//switch element when editing inline
				function aceSwitch( cellvalue, options, cell ) {
					setTimeout(function(){
						$(cell) .find('input[type=checkbox]')
								.wrap('<label class="inline" />')
							.addClass('ace ace-switch ace-switch-5')
							.after('<span class="lbl"></span>');
					}, 0);
				}
				//enable datepicker
				function pickDate( cellvalue, options, cell ) {
					setTimeout(function(){
						$(cell) .find('input[type=text]')
								.datepicker({format:'yyyy-mm-dd' , autoclose:true}); 
					}, 0);
				}
			
			
				//navButtons
				jQuery(grid_selector).jqGrid('navGrid',pager_selector,
					{ 	//navbar options
						edit: true,
						editicon : 'icon-pencil blue',
						add: true,
						addicon : 'icon-plus-sign purple',
						del: true,
						delicon : 'icon-trash red',
						search: true,
						searchicon : 'icon-search orange',
						refresh: true,
						refreshicon : 'icon-refresh green',
						view: true,
						viewicon : 'icon-zoom-in grey',
					},
					{
						//edit record form
						//closeAfterEdit: true,
						recreateForm: true,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_edit_form(form);
						}
					},
					{
						//new record form
						closeAfterAdd: true,
						recreateForm: true,
						viewPagerButtons: false,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_edit_form(form);
						}
					},
					{
						//delete record form
						recreateForm: true,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							if(form.data('styled')) return false;
							
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_delete_form(form);
							
							form.data('styled', true);
						},
						onClick : function(e) {
							alert(1);
						}
					},
					{
						//search form
						recreateForm: true,
						afterShowSearch: function(e){
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
							style_search_form(form);
						},
						afterRedraw: function(){
							style_search_filters($(this));
						}
						,
						multipleSearch: true,
						/**
						multipleGroup:true,
						showQuery: true
						*/
					},
					{
						//view record form
						recreateForm: true,
						beforeShowForm: function(e){
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
						}
					}
				)
			
			
				
				function style_edit_form(form) {
					//enable datepicker on "sdate" field and switches for "stock" field
					form.find('input[name=sdate]').datepicker({format:'yyyy-mm-dd' , autoclose:true})
						.end().find('input[name=stock]')
							  .addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');
			
					//update buttons classes
					var buttons = form.next().find('.EditButton .fm-button');
					buttons.addClass('btn btn-sm').find('[class*="-icon"]').remove();//ui-icon, s-icon
					buttons.eq(0).addClass('btn-primary').prepend('<i class="icon-ok"></i>');
					buttons.eq(1).prepend('<i class="icon-remove"></i>')
					
					buttons = form.next().find('.navButton a');
					buttons.find('.ui-icon').remove();
					buttons.eq(0).append('<i class="icon-chevron-left"></i>');
					buttons.eq(1).append('<i class="icon-chevron-right"></i>');		
				}
			
				function style_delete_form(form) {
					var buttons = form.next().find('.EditButton .fm-button');
					buttons.addClass('btn btn-sm').find('[class*="-icon"]').remove();//ui-icon, s-icon
					buttons.eq(0).addClass('btn-danger').prepend('<i class="icon-trash"></i>');
					buttons.eq(1).prepend('<i class="icon-remove"></i>')
				}
				
				function style_search_filters(form) {
					form.find('.delete-rule').val('X');
					form.find('.add-rule').addClass('btn btn-xs btn-primary');
					form.find('.add-group').addClass('btn btn-xs btn-success');
					form.find('.delete-group').addClass('btn btn-xs btn-danger');
				}
				function style_search_form(form) {
					var dialog = form.closest('.ui-jqdialog');
					var buttons = dialog.find('.EditTable')
					buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'icon-retweet');
					buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'icon-comment-alt');
					buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'icon-search');
				}
				
				function beforeDeleteCallback(e) {
					var form = $(e[0]);
					if(form.data('styled')) return false;
					
					form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
					style_delete_form(form);
					
					form.data('styled', true);
				}
				
				function beforeEditCallback(e) {
					var form = $(e[0]);
					form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
					style_edit_form(form);
				}
			
			
			
				//it causes some flicker when reloading or navigating grid
				//it may be possible to have some custom formatter to do this as the grid is being created to prevent this
				//or go back to default browser checkbox styles for the grid
				function styleCheckbox(table) {
				/**
					$(table).find('input:checkbox').addClass('ace')
					.wrap('<label />')
					.after('<span class="lbl align-top" />')
			
			
					$('.ui-jqgrid-labels th[id*="_cb"]:first-child')
					.find('input.cbox[type=checkbox]').addClass('ace')
					.wrap('<label />').after('<span class="lbl align-top" />');
				*/
				}
				
			
				//unlike navButtons icons, action icons in rows seem to be hard-coded
				//you can change them like this in here if you want
				function updateActionIcons(table) {
					/**
					var replacement = 
					{
						'ui-icon-pencil' : 'icon-pencil blue',
						'ui-icon-trash' : 'icon-trash red',
						'ui-icon-disk' : 'icon-ok green',
						'ui-icon-cancel' : 'icon-remove red'
					};
					$(table).find('.ui-pg-div span.ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
					*/
				}
				
				//replace icons with FontAwesome icons like above
				function updatePagerIcons(table) {
					var replacement = 
					{
						'ui-icon-seek-first' : 'icon-double-angle-left bigger-140',
						'ui-icon-seek-prev' : 'icon-angle-left bigger-140',
						'ui-icon-seek-next' : 'icon-angle-right bigger-140',
						'ui-icon-seek-end' : 'icon-double-angle-right bigger-140'
					};
					$('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
				}
			
				function enableTooltips(table) {
					$('.navtable .ui-pg-button').tooltip({container:'body'});
					$(table).find('.ui-pg-div').tooltip({container:'body'});
				}
			
				//var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');
			
			
			});
		</script>
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
