@include("html.top")
<!--//-->	



<div class="container">

	
	<div class="buy-single-single">
	
			<div class="col-md-9 single-box">
				
       <div class=" buying-top">
			<div class="flexslider">
  <ul class="slides">
    <li data-thumb="{{asset('/images/ss.jpg')}}">
      <img src="{{asset('/images/ss.jpg')}}" />
    </li>
    <li data-thumb="{{asset('/images/ss1.jpg')}}">
      <img src="{{asset('/images/ss1.jpg')}}" />
    </li>
    <li data-thumb="{{asset('/images/ss2.jpg')}}">
      <img src="{{asset('/images/ss2.jpg')}}" />
    </li>
    <li data-thumb="{{asset('/images/ss3.jpg')}}">
      <img src="{{asset('/images/ss3.jpg')}}" />
    </li>
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="{{asset('/js/jquery.flexslider.js')}}"></script>
<link rel="stylesheet" href="{{asset('/css/flexslider.css')}}" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</div>
<div class="buy-sin-single">
			<div class="col-sm-5 middle-side immediate">
			@foreach($row  as $kk=>$vv)
					     <h4>房源名字: [天朝居]{{$vv->house_name}}</h4>
					     	<table class='table'>
							<tr>
								<td><span class="bath">价钱</span> <input type="hidden" id="house_id" value="{{$vv->house_id}}"></td>
								<td>:<span class="two"><font color="red">￥<b id='price'>{{$vv->house_price}}</b></font></span></td>
							</tr>
							<tr>
								<td> <span class="bath1">户型</span>  </td>
								<td>:<span class="two">{{$vv->house_apartment}}</span></td>
							</tr>
							<tr>
								<td><span class="bath2">安全验证</span></td>
								<td>:<span class="two"><button type="button" class="btn btn-xs btn-warning">★已实名认证</button></span></td>
							</tr>
							<tr>
								<td><span class="bath3">类型</span></td>
								<td>:<span class="two">@if($vv->house_boutique)
                            <font color="orange">*精品房&nbsp;&nbsp;</font>
                        @endif
                        @if($vv->house_activity==1)
                         <font color="orange">*活动房&nbsp;&nbsp;</font>
                        @endif
                        @if($vv->house_heat==1)
                         <font color="orange">*热销房&nbsp;&nbsp;</font>
                        @endif</span></td>
							</tr>
							<tr>
								<td><span class="bath4">地址</span>  </td>
								<td> :<span class="two">{{$vv->house_address}}</span></td>
							</tr>
							<tr>
								<td><span class="bath5">评论</span>   </td>
								<td> :	<span class="two">{{$evalcount}}条 </span></td>
							</tr>
							</table>
					    
						 <div class="   right-side">
							 <a href="javascript:void(0)" id='collect' class="btn btn-sm btn-primary" >收藏该房</a>&nbsp;&nbsp;&nbsp;&nbsp;
								@if($order==0)
								<button type="button"  id="order"  class="btn btn-sm btn-primary">我要订房</button>
								@else
								<button type="button"  class="btn btn-sm btn-danger">已经在您的订单中</button>
								@endif
						 </div>
					</div>
					 <div class="col-sm-7 buy-sin">
					 	<h4>房屋介绍</h4>					 	<div class="alert alert-info" role="alert">
       {{$vv->house_desc}}
      </div>
      				<h5>详情介绍</h5>
				 	<p>【卧室】豪华舒适的大双人床，超舒适高级床垫，高档家具，纯棉高档床品（干净亲肤）<br>
					【厨房】燃气，韩国不粘锅，刀叉齐全，红酒杯，醒酒器，热水壶，洋酒杯子，时尚餐具<br>
					【餐厅】烛台，花瓶，开瓶器，花艺<br>
					【卫生间】24小时热水洗澡，大喷头超爽淋浴，高档洗发沐浴大瓶免费提供，还有高档浴巾和毛巾呦，洗衣机滚筒自动，吹风机，牙刷免费<br>
					【客厅】无线WIFI ，拖鞋，香氛，3人加沙发宽敞，高档电视<br>
						</p>
					 </div>
@endforeach
					 <div class="clearfix"> </div>
					</div>

					<!--留言板-->
					<div class="video-pre">
						<div class="content-bottom">
			<div class="container">
			

				<div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">此房屋评论</h3>
            </div>
            <div class="panel-body">
             <div id='hoeval'>
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
 
   </div>
            </div>
          </div>
				

					<div class="clearfix"> </div>
			</div>
		<div class="create">
				<a class="hvr-sweep-to-right" href="javascript:void(0)">
				<font id="WOW_TRANSLATE_100"  class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="100">
				我要留言</font>
				</a>
	<div id='addeval' style="display:none;">		
<div class="container">
	
		<div class="feedback-top">

				<textarea placeholder="请输入留言内容!!!" requried=""  id="coll"></textarea>
				<div  id='eval'>
				<button type="button" class="btn btn-1 btn-default">发表评论</button></div>
				 <label class="hvr-sweep-to-right">
	           </label>

		</div>
	</div>	
</div>

				<div class="clearfix"> </div>
			</div>
		</div>
</div>
<script>
/**
 * 我要留言
 * [description]
 * @param  {[type]} ){		$('#addeval').attr({style:''})	} [description]
 * @return {[type]}                                          [description]
 */
	$('#WOW_TRANSLATE_100').click(function(){
		$('#addeval').attr({style:''})
	});
	/**
	 * 评论处理
	 * [description]
	 * @param  {[type]} ){		                          desc [description]
	 * @param  {[type]} 评论失败      [description]
	 * @param  {[type]} 请重新评论!");                                                      }else if(data [description]
	 * @return {[type]}           [description]
	 */
	$('#eval').click(function(){
		
         desc=document.getElementById('coll').value;

        house_id=$('#house_id').val();
      
         $.get("{{asset('House/adddesc')}}", {house_id:house_id,desc:desc},
              function(data){

                 if(data==0){
                           alert("亲由于网络原因,评论失败,请重新评论!");
                        }else if(data==3){
                   		   alert("您已经评论过了!");
                        }else{
                        	$('#addeval').attr({style:'display:none;'})
                             $('#hoeval').html(data)
                        }
              });
	
	});
/**
 * 收藏
 * [description]
 * @param  {[type]} ){                         house_id [description]
 * @return {[type]}     [description]
 */
        $('#collect').click(function(){ 

           house_id=$('#house_id').val();
            $.get("{{asset('House/collect')}}", { house_id:house_id}, function(data){
            	
                        if(data==1){
                                  alert("已经给您的收藏夹加过了!");
                        }else{
                           alert("已加入您的收藏夹!");

                        }
                });
           ;
        });
/**
 * 下单
 * [description]
 * @param  {[type]} ){                         house_id [description]
 * @return {[type]}     [description]
 */
         $('#order').click(function(){ 
           house_id=$('#house_id').val();
           price=$('#price').html();
           if(confirm("下订单需教押金"+Math.ceil(price*0.3)+'元')){
            $.get("{{asset('House/order')}}", { house_id:house_id,price:price,}, function(data){
            	
                                        if(data==1){
                                         $('#order').attr({class:'btn btn-sm btn-danger'})	
                                  $('#order').html("已经在您的订单中");
                        }else{
                          alert("下单成功!");                        }
                });
        }else{
             alert("取消订单!");
        }
        });

</script>

				

					 <!--地图-->


	<style type="text/css">
		#allmap{height:500px;width:1204px;}
		#premium{height:500px;width:1204px;}
		#r-result,#r-result table{width:100%;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=DG3WqndDm4nZMagFcRQ6oT7an9TKRzwf	"></script>
						 <div class="panel panel-info" style="width:1250px;">
            <div class="panel-heading" style="width:1250px;">
              <h3 class="panel-title" style="width:1250px;">百度地图</h3>
            </div>
            <div class="panel-body" style="width:1250px;">
              <div id="allmap"></div>
	<div id="driving_way">
		<select  class="in-drop">
			<option value="0">最少时间</option>
			<option value="1">最短距离</option>
			<option value="2">避开高速</option>
		</select>
		<a href="javascript:void(0)" id="result"  class="hvr-sweep-to-right more"  />查询</a>
	</div>
	<div id="r-result"></div>
            </div>
          </div>

	
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	var start = "天安门";
	var end = "百度大厦";
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
	//三种驾车策略：最少时间，最短距离，避开高速
	var routePolicy = [BMAP_DRIVING_POLICY_LEAST_TIME,BMAP_DRIVING_POLICY_LEAST_DISTANCE,BMAP_DRIVING_POLICY_AVOID_HIGHWAYS];
	$("#result").click(function(){
		map.clearOverlays(); 
		var i=$("#driving_way select").val();
		search(start,end,routePolicy[i]); 
		function search(start,end,route){ 
			var driving = new BMap.DrivingRoute(map, {renderOptions:{map: map, autoViewport: true},policy: route});
			driving.search(start,end);
		}
	});
</script>
					

					<!--最热-->
				<div class="choose-us">
		<div class="container">
			<h3><font id="WOW_TRANSLATE_36" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="36">为什么选择我的房子</font></h3>
			<div class="us-choose">
				<div class="col-md-6 why-choose">
					<div class="  ser-grid ">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-pencil"> </i>
					</div>
					<div class="ser-top beautiful"> 
						<h5><font id="WOW_TRANSLATE_37" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="37">美丽和有趣的设计</font></h5>
						<label><font id="WOW_TRANSLATE_38" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="38">标准块Lorem</font></label>
						<p><font id="WOW_TRANSLATE_39" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="39">Lorem ipsum悲哀坐amet,consectetur adipiscing elit,sed做eiusmod时间incididunt ut并dolore麦格纳aliqua。 Ut enim广告微量veniam,nostrud实习ullamco laboris非绝对的Ut。</font></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 why-choose">
					<div class=" ser-grid">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-time"> </i>
					</div>
					<div class="ser-top beautiful"> 
						<h5><font id="WOW_TRANSLATE_40" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="40">独特优渥的地理条件</font></h5>
						<label><font id="WOW_TRANSLATE_41" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="41">标准块Lorem</font></label>
						<p><font id="WOW_TRANSLATE_42" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="42">Lorem ipsum悲哀坐amet,consectetur adipiscing elit,sed做eiusmod时间incididunt ut并dolore麦格纳aliqua。 Ut enim广告微量veniam,nostrud实习ullamco laboris非绝对的Ut。</font></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="us-choose">
				<div class="col-md-6 why-choose">
					<div class=" ser-grid">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-cog"> </i>
					</div>
					<div class="ser-top beautiful"> 
						<h5><font id="WOW_TRANSLATE_43" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="43">便捷的交通</font></h5>
						<label><font id="WOW_TRANSLATE_44" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="44">标准块Lorem</font></label>
						<p><font id="WOW_TRANSLATE_45" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="45">Lorem ipsum悲哀坐amet,consectetur adipiscing elit,sed做eiusmod时间incididunt ut并dolore麦格纳aliqua。 Ut enim广告微量veniam,nostrud实习ullamco laboris非绝对的Ut。</font></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 why-choose">
					<div class=" ser-grid">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-file"> </i>
					</div>
					<div class="ser-top beautiful"> 
						<h5><font id="WOW_TRANSLATE_46" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="46">吃喝玩乐</font></h5>
						<label><font id="WOW_TRANSLATE_47" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="47">标准块Lorem</font></label>
						<p><font id="WOW_TRANSLATE_48" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="48">Lorem ipsum悲哀坐amet,consectetur adipiscing elit,sed做eiusmod时间incididunt ut并dolore麦格纳aliqua。 Ut enim广告微量veniam,nostrud实习ullamco laboris非绝对的Ut。</font></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
				
			</div>
		</div>
		</div>
	

			
		
		<div class="col-md-3" id="col-md-3">




			<div class="single-box-right right-immediate">
		     	<h4>该房主还有...</h4>
@foreach($rows as $kk=>$vv)
				<div class="single-box-img ">
					<div class="box-img">
						<a href="{{url('House/single')}}?id={{$vv->house_id}}"><img class="img-responsive" src="{{asset('/images/sl.jpg')}}" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="{{url('House/single')}}?id={{$vv->house_id}}">{{$vv->house_name}}</a></p>
						<a href="{{url('House/single')}}?id={{$vv->house_id}}" class="in-box"><font color="red">￥<b>{{$vv->house_price}}</b></font></a>
						<a href="{{url('House/single')}}?id={{$vv->house_id}}" class="in-box">{{$vv->house_address}}</a>
						<a href="{{url('House/single')}}?id={{$vv->house_id}}" class="in-box">{{$vv->house_apartment}}</a>

					</div>
					<div class="clearfix"> </div>
				</div>
@endforeach
			

		 </div>
			
	  </div>
		<div class="clearfix"> </div>
		</div>
	</div>

<!---->
<div class="container">
	<div class="future">
		<h3 >类似房屋</h3>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">		
					@foreach($address as $kk=>$vv)	
						<li><div class="project-fur">
								<a href="{{url('House/single')}}?id={{$vv->house_id}}" ><img class="img-responsive" src="{{asset('/images/pi.jpg')}}" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">@if($vv->house_boutique)
                            <font color="orange">*精品房&nbsp;&nbsp;</font>
                        @endif
                        @if($vv->house_activity==1)
                         <font color="orange">*活动房&nbsp;&nbsp;</font>
                        @endif
                        @if($vv->house_heat==1)
                         <font color="orange">*热销房&nbsp;&nbsp;</font>
                        @endif</span>
		                                    <h6 class="fur-name"><a href="{{url('House/single')}}?id={{$vv->house_id}}"><h4>[天朝居]{{$vv->house_name}}</h4></a></h6>
		                                   	<span>{{$vv->house_apartment}}</span>
                               			</div>
			                            <div class="fur2">
			                               	<span><font color="red"><b id='price'>RMB{{$vv->house_price}}</b></font></span>
			                             </div>
									</div>					
							</div></li>
						@endforeach

					</ul>
					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 3
						    		}
						    	}
						    });
						    
						});
			</script>
			<script type="text/javascript" src="{{asset('/js/jquery.flexisel.js')}}"></script>
		</div>
	</div>
	
</div>
@include("html.footer")
</body>
</html>