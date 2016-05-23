<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<a href="index.php?r=index/index">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 天朝居管理中心 </span>
							</a>
						</li>

						<li>
							<a href="index.php?r=index/typography">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 信息管理 </span>
							</a>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 推广活动管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="index.php?r=index/tables">
										<i class="icon-double-angle-right"></i>
										推广信息列表
									</a>
								</li>

								<li>
									<a href="index.php?r=index/jqgrid">
										<i class="icon-double-angle-right"></i>
										推广信息添加
									</a>
								</li>
							</ul>
						</li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-list"></i>
                                <span class="menu-text"> 用户信息管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="index.php?r=user/index">
                                        <i class="icon-double-angle-right"></i>
                                        信息管理
                                    </a>
                                </li>
                            </ul>
                        </li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 租房订单管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>



							<ul class="submenu">
								<li>
									<a href="index.php?r=order/listm">
										<i class="icon-double-angle-right"></i>
										待处理订单
									</a>
								</li>

								<li>
									<a href="index.php?r=order/listing">
										<i class="icon-double-angle-right"></i>
										处理中订单
									</a>
								</li>

								<li>
									<a href="index.php?r=order/listend">
										<i class="icon-double-angle-right"></i>
										已完成订单
									</a>
								</li>
								</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 房源信息管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="index.php?r=index/tables">
										<i class="icon-double-angle-right"></i>
										房源信息更改
									</a>
								</li>

								<li>
									<a href="index.php?r=index/jqgrid">
										<i class="icon-double-angle-right"></i>
										房源审核
									</a>
								</li>

								<li>
									<a href="index.php?r=index/jqgrid">
										<i class="icon-double-angle-right"></i>
										房源展示列表
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 实名认证管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="index.php?r=index/form-elements">
										<i class="icon-double-angle-right"></i>
										待审核
									</a>
								</li>

								<li>
									<a href="index.php?r=index/wysiwyg">
										<i class="icon-double-angle-right"></i>
										审核通过
									</a>
								</li>

								<li>
									<a href="index.php?r=index/form-wizard">
										<i class="icon-double-angle-right"></i>
										角色变换
									</a>
								</li>

								<li>
									<a href="index.php?r=index/dropzone">
										<i class="icon-double-angle-right"></i>
										文件上传
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="index.php?r=index/widgets">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 插件 </span>
							</a>
						</li>

						<li>
							<a href="index.php?r=index/calendar">
								<i class="icon-calendar"></i>

								<span class="menu-text">
									天朝日历
									<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
										<i class="icon-warning-sign red bigger-130"></i>
									</span>
								</span>
							</a>
						</li>

						<li>
							<a href="index.php?r=index/gallery">
								<i class="icon-picture"></i>
								<span class="menu-text"> 天朝相册 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-tag"></i>
								<span class="menu-text"> 更多页面 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="index.php?r=index/profile">
										<i class="icon-double-angle-right"></i>
										用户信息
									</a>
								</li>

								<li>
									<a href="index.php?r=index/inbox">
										<i class="icon-double-angle-right"></i>
										收件箱
									</a>
								</li>

								<li>
									<a href="index.php?r=index/pricing">
										<i class="icon-double-angle-right"></i>
										售价单
									</a>
								</li>

								<li>
									<a href="index.php?r=index/invoice">
										<i class="icon-double-angle-right"></i>
										购物车
									</a>
								</li>

								<li>
									<a href="index.php?r=index/timeline">
										<i class="icon-double-angle-right"></i>
										时间轴
									</a>
								</li>

								<li>
									<a href="index.php?r=index/login">
										<i class="icon-double-angle-right"></i>
										登录 &amp; 注册
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-file-alt"></i>

								<span class="menu-text">
									其他页面
									<span class="badge badge-primary ">5</span>
								</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="index.php?r=index/faq">
										<i class="icon-double-angle-right"></i>
										帮助
									</a>
								</li>

								<li>
									<a href="index.php?r=index/error404">
										<i class="icon-double-angle-right"></i>
										404错误页面
									</a>
								</li>

								<li>
									<a href="index.php?r=index/error500">
										<i class="icon-double-angle-right"></i>
										500错误页面
									</a>
								</li>

								<li>
									<a href="index.php?r=index/grid">
										<i class="icon-double-angle-right"></i>
										网格
									</a>
								</li>

								<li>
									<a href="index.php?r=index/blank">
										<i class="icon-double-angle-right"></i>
										空白页面
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.nav-list -->
					