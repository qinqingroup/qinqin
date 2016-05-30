 @foreach($eval  as $kk=>$vv)
			@if($kk%2==0)
					<div class="col-md-6 name-in">
						<div class=" bottom-in">
							<p class="para-in">
<button type="button" class="btn btn-xs btn-info">{{$vv->eval_desc}}</button>
							</p>
						    <i class="dolor"> </i>
							<div class="men-grid">
								<a href="#" class="men-top"><img class="img-responsive men-top" style="width:50px;height50px;" src="{{asset('/images')}}/{{$vv->u_photo}}" alt=""></a>
								<div class="men">
								<span>{{$vv->u_name}}</span>
								<p>{{$vv->eval_time}} </p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					</div>
				@else
					<div class="col-md-6  name-on">
						<div class="bottom-in ">
							<p class="para-in">
<button type="button" class="btn btn-xs btn-warning">{{$vv->eval_desc}}</button>
							</p>
							<i class="dolor"> </i>
							<div class="men-grid">
								<a href="#" class="men-top"><img class="img-responsive " style="width:50px;height50px;" src="{{asset('/images')}}/{{$vv->u_photo}}" alt=""></a>
								<div class="men">
									<span>{{$vv->u_name}}</span>
									<p>{{$vv->eval_time}} </p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					@endif
   @endforeach