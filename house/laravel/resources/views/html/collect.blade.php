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
			<h3>个人中心&nbsp;&nbsp;.&nbsp;&nbsp;我的收藏</h3>
				@foreach($user as $c)
					<a  href="{{$c->p_url}}" class="hvr-sweep-to-right more">{{$c->p_name}}</a>&nbsp;&nbsp;&nbsp;&nbsp;
				@endforeach
			<span>查看</span>&nbsp;&nbsp;<b> 我的收藏</b>
			<form>
			<div class="panel panel-success">
	            <div class="panel-heading">
	              <span class="panel-title"><b>订单管理</b></span>
	            	</div>
					<table class="table"> 
						<tr >
							<td>房间id</td>
							<td>房间名</td>
							<td>收藏时间</td>
							<td>房间状态</td>
							<td>操作</td>
						</tr>
						@foreach($collect as $v)
						<tr>
							<td>{{$v->house_id}}</td>
							<td>{{$v->house_name}}</td>
							<td>{{$v->coll_time}}</td>
							<td>
								@if($v->is_shelves==0)
									未上架
								@elseif($v->is_shelves==1)
									已上架
								@endif
							</td>
							<td>						
								<a href="{{url('collectDel')}}?id={{$v->coll_id}}">删除收藏</a>
							</td>
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