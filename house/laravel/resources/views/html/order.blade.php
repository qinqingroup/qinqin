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
			<h3>个人中心&nbsp;&nbsp;.&nbsp;&nbsp;订单管理</h3>
				@foreach($user as $v)
					<a  href="{{$v->p_url}}" class="hvr-sweep-to-right more">{{$v->p_name}}</a>&nbsp;&nbsp;&nbsp;&nbsp;
				@endforeach
			<h4><b订单管理</b></h4>
			<form>
			<div class="panel panel-success">
	            <div class="panel-heading">
	              <span class="panel-title"><b>订单管理</b></span>
	            	</div>
	            	<table class="table">
	            	<tr>
						<td>订单id</td>
						<td>下单人</td>
						<td>房间名</td>
						<td>下单时间</td>
						<td>退房时间</td>
						<td>房间价格</td>
						<td>押金</td>
						<td>订单状态</td>
						<td>订单编号</td>
					</tr>
					@foreach($orders as $k=>$c)
					<tr>
						<td>{{$c->order_id}}</td>
						<td>{{$c->u_name}}</td>
						<td>{{$c->house_name}}</td>
						<td>{{$c->order_time}}</td>
						<td>{{$c->order_out_time}}</td>
						<td><b>{{$c->order_price}}</b></td>
						<td><b>{{$c->order_deposit}}</b></td>
						<td>
							@if($c->order_state==0)
								未入住
							@elseif($c->order_state==1)
								正在入住
							@elseif($c->order_state==3)
								完成
							@elseif($c->order_state==4)
								订单被取消
							@endif
						</td>
						<td>{{$c->order_number}}</td>
					</tr>
					@endforeach
				</table>
				<!--<div class="sub">
					<label class="hvr-sweep-to-right"><input type="submit" value="Apply" placeholder=""></label>
				</div>-->
			</div>
			
			</form>
		</div>
	</div>
</div>
@include("html.footer")
</body>
</html>