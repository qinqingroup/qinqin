<!DOCTYPE html>
<html>
<head>
<title>Login</title>
@include("html.top")
<!--//header-->
<!---->

<div class="loan_single">
	<div class="container">
		<div class="loan-col">
			<h3>个人中心&nbsp;&nbsp;.&nbsp;&nbsp;房源管理</h3>
				@foreach($user as $c)
					<a  href="{{$c->p_url}}" class="hvr-sweep-to-right more">{{$c->p_name}}</a>&nbsp;&nbsp;&nbsp;&nbsp;
				@endforeach
			<form>
			<br/>
			<div class="panel panel-success">
	            <div class="panel-heading">
	              <span class="panel-title"><b>房源管理</b></span>
	            </div>
            
				<table class="table"> 
					<tr>
						<td>房间id</td>
						<td>房间类型</td>
						<td>是否安全认证</td>
						<td>是否上架</td>
						<td>价格</td>
						<td>户型</td>
						<td>添加时间</td>
						<td>房屋地址</td>
						<td>操作</td>
					</tr>
					@foreach($house as $k=>$v)
					<tr>
						<td>{{$v->house_id}}</td>
						<td>{{$v->class_type}}</td>
						<td>{{$v->house_auth}}</td>
						<td>
							@if($v->is_shelves==1)
							是
							@else
							否
							@endif
						</td>
						<td>{{$v->house_price}}</td>
						<td>{{$v->house_apartment}}</td>
						<td>{{$v->house_time}}</td>
						<td>{{$v->house_address}}</td>
						<td><a href="{{url('houseDel')}}?id={{$v->house_id}}">删除</a></td>
					</tr>
					@endforeach
				</table>
				</div>
				
				  {!! $house->render() !!}
				<!--<div class="sub">
					<label class="hvr-sweep-to-right"><input type="submit" value="Apply" placeholder=""></label>
				</div>-->
				
			 </div>
          </div>	
			</form>
</div>
@include("html.footer")
</body>
</html>