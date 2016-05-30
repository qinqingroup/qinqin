<!DOCTYPE html>
<html>
<head>
<title>Buy_Single</title>
@include("html.top")
<!---->


<!---->
<div class="container">
	
	<div class="buy-single">
		<h3>天朝居</h3>
		<div class="box-sin">
			
			<div class="col-md-9 single-box">
				@foreach($hshow as $v)
				<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						<a href="{{url('House/single')}}?id={{$v->house_id}}"> <img class="img-responsive" src="{{$v->photo_url}}" style="height:300px width:300px" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					     <h4>{{$v->house_name}}</h4>
					     <p><span class="bath">房主 </span>: <span class="two">{{$v->u_name}}</span></p>
					     <p>  <span class="bath">价格</span>: <span class="two">{{$v->house_price}}元</span></p>
					     <p><span class="bath3">房屋地区</span>: <span class="two">{{$v->house_address}}</span></p>
					     <p><span class="bath3">房屋类型 </span>:<span class="two"> {{$v->class_type}}</span></p>
						 <p><span class="bath3">房屋户型</span> : <span class="two">{{$v->house_apartment}}</span></p>			 
						<div class="   right-side">
							 <a href="{{url('House/single')}}?id={{$v->house_id}}" class="hvr-sweep-to-right more" >查看详情</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>
                @endforeach
			</div>
		</div>
		<div class="col-md-3 map-single-bottom">
			<div class="single-box-right">
		     	<h4>特别推荐</h4>
		     	@foreach($te as $v)
				<div class="single-box-img">
					<div class="box-img">
						<a href="{{url('House/single')}}?id={{$v->house_id}}"><img class="img-responsive" src="{{$v->photo_url}}" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="{{url('House/single')}}?id={{$v->house_id}}">{{$v->house_name}}</a></p>
						<a href="{{url('House/single')}}?id={{$v->house_id}}" class="in-box">￥{{$v->house_price}}元</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				@endforeach
		 </div>
	  </div>
		<div class="clearfix"> </div>
		<div class="nav-page">
			<nav>
			      <ul class="pagination">
			      {!! $hshow->render() !!}
			     </ul>
	        </nav>
        </div>
	    </div>
		
	</div>
	
</div>
<!---->
@include("html.footer")
</body>
</html>