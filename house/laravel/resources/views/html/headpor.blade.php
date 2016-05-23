@include('html.top')
<div style='height:70%'>
											<div class="widget-box">
												<div class="widget-header">
													<h4>Custom File Input</h4>

													<span class="widget-toolbar">
														<a href="#" data-action="collapse">
															<i class="icon-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="icon-remove"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="ace-file-input"><input id="id-input-file-2" type="file"><label class="file-label" data-title="Choose"><span class="file-name" data-title="No File ..."><i class="icon-upload-alt"></i></span></label><a class="remove" href="#"><i class="icon-remove"></i></a></div>
														<div class="ace-file-input ace-file-multiple"><input multiple="" id="id-input-file-3" type="file"><label class="file-label" data-title="Drop files here or click to choose"><span class="file-name" data-title="No File ..."><i class="icon-cloud-upload"></i></span></label><a class="remove" href="#"><i class="icon-remove"></i></a></div>
														<label>
															<input name="file-format" id="id-file-format" class="ace" type="checkbox">
															<span class="lbl"> Allow only images</span>
														</label>
													</div>
												</div>
											</div>
										</div>
										

  @include("html.footer");