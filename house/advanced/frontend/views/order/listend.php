<?php

use yii\widgets\LinkPager;

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Bootstrap表格插件 - Bootstrap后台管理系统模版Ace下载</title>
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
                                <a href="#">订单管理</a>
                            </li>
                            <li class="active">已完成订单</li>
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
                                    已完成订单
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="table-responsive">
                                    
                                        <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                                    <tr>
                                                        <th>选中</th>
                                                        <th>订单编号</th>
                                                        <th>下单时间</th>
                                                        <th>房屋信息</th>
                                                        <th>订单金额</th>
                                                        <th>预付押金</th>
                                                        <th>支付人姓名</th>
                                                        <th>订单状态</th>
                                                        <th>应收</th>
                                                        <th>操作</th>
                                                    </tr>
                                                <?php foreach($row as  $kk=>$vv){ ?>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /><?php  echo $vv['order_id'] ?></td>
                                                          <td><?php  echo $vv['order_number'] ?></td>
                                                        <td><?php  echo $vv['order_time'] ?></td>
                                                        <td><?php  echo $vv['house_id'] ?></td>
                                                        <td><?php  echo $vv['order_price'] ?>元</td>
                                                        <td><?php  echo $vv['order_deposit'] ?>元</td>
                                                        <td><?php  echo $vv['house_id'] ?></td>
                                                        <td> 
                                                        <span class="label label-sm label-success">已完成</span></td>
                                                        <td><?php  echo $vv['order_price']*0.1; ?></td>
                                                        <td><a href="index.php?r=order/delstate&id=<?php  echo $vv['order_id'] ?>&state=<?php  echo $vv['order_state'] ?>">
                                                        <button class="btn btn-xs btn-danger">
                                                                    <i class="icon-trash bigger-120"></i>
                                                                </button></a>
                                                                 <a href="index.php?r=order/lookstate&id=<?php  echo $vv['order_id'] ?>"><button class="btn btn-xs btn-warning">
                                                                    <i class="icon-flag bigger-120"></i>
                                                                </button></a></td>
                                                    </tr>
                                                    <?php } ?>

                                                </table>
                                                 <?= LinkPager::widget(['pagination' => $pagination]) ?>
                                        </div><!-- /.table-responsive -->
                                    </div><!-- /span -->
                                </div><!-- /row -->

                                <div class="hr hr-18 dotted hr-double"></div>


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

        <script src="<?= Yii::$app->request->baseUrl?>/assets/js/jquery.dataTables.min.js"></script>
        <script src="<?= Yii::$app->request->baseUrl?>/assets/js/jquery.dataTables.bootstrap.js"></script>

        <!-- ace scripts -->

        <script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace-elements.min.js"></script>
        <script src="<?= Yii::$app->request->baseUrl?>/assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->

        <script type="text/javascript">
            jQuery(function($) {
                var oTable1 = $('#sample-table-2').dataTable( {
                "aoColumns": [
                  { "bSortable": false },
                  null, null,null, null, null,
                  { "bSortable": false }
                ] } );
                
                
                $('table th input:checkbox').on('click' , function(){
                    var that = this;
                    $(this).closest('table').find('tr > td:first-child input:checkbox')
                    .each(function(){
                        this.checked = that.checked;
                        $(this).closest('tr').toggleClass('selected');
                    });
                        
                });
            
            
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $source.offset();
                    var w2 = $source.width();
            
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                    return 'left';
                }
            })
        </script>
    <div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
