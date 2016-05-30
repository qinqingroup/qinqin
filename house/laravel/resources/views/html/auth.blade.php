<!DOCTYPE html>
<html>
<head>
<title>Login</title>
@include("html.top")
<style>
	.photo{
		 position: absolute;
 		right:300px;
 		top:1050px;
	}
</style>
	
<!--//header-->
<!---->

<div class="loan_single">
	<div class="container">
		<div class="loan-col">
			<h3>实名认证&nbsp;&nbsp;.&nbsp;&nbsp;申请</h3>
				@foreach($user as $v)
					<a  href="{{$v->p_url}}" class="hvr-sweep-to-right more">{{$v->p_name}}</a>&nbsp;&nbsp;&nbsp;&nbsp;
				@endforeach	
			<form method="post" action="{{url('auth_add')}}" enctype="multipart/form-data">
			<br/>
			<div class="panel panel-success">
            <div class="panel-heading">
              <span><b>实名认证</b></span>
            </div>
            @foreach($users as $c)
            <div class="panel-body">
             <div class="col-loan">	
             <div class="left">
				<ul class="loan-col1">
					<li><span>真实姓名</span> </li><label>:</label>
					<li class="loan-list-top">
							<input type="text" value="{{$c->u_name}}" name="u_name">
					</li>
				</ul>
				

				<ul class="loan-col1">
					<li><span>手机号</span> </li><label>:</label>
					<li class="loan-list-top">
							<input type="text" value="{{$c->u_phone}}" name="u_phone">
					</li>
				</ul>

				<ul class="loan-col1">
					<li><span>身份证</span> </li><label>:</label>
					<li class="loan-list-top">
							<input type="text" value="{{$c->u_ressadd}}" name="u_ressadd">
					</li>
				</ul>

				<ul class="loan-col1">
					<li><span>邮箱</span> </li><label>:</label>
					<li class="loan-list-top">
							<input type="text" value="{{$c->u_email}}" name="u_email">
					</li>
				</ul>

				<ul class="loan-col1">
					<li><span>住址</span> </li><label>:</label>
					<li class="loan-list-top">
							<input type="text" value="{{$g}}-{{$s}}-{{$q}}" name="u_zhuzhi">
					</li>
				</ul>

				<ul class="loan-col1">
					<li><span>注册时间</span> </li><label>:</label>
					<li class="loan-list-top">
							<input type="text" value="{{$c->u_time}}" name="u_time">
					</li>
				</ul>
				
				</div>
				<!--<div class="sub">
					<label class="hvr-sweep-to-right"><input type="submit" value="Apply" placeholder=""></label>
				</div>-->
				<div class="photo">
					@if(($c->u_photo)=="")
							<img id="headimage" style="width:200px;height:200px;" src="UserUploads/1.jpg" alt="">
					@else
							<img id="headimage" style="width:200px;height:200px;" src="UserUploads/{{$c->u_photo}}" alt="">
					@endif
					<br/>
					<a  href="JavaScript:void(0)" id="xiu" class="hvr-sweep-to-right more" onclick="photoupd();">修改头像</a>
					<br/>
					<div id="photoupd" style="display:none">
						<input type="file" name="u_photo" />
						<br/>
			           	<input class="btn btn-sm btn-info" type="submit" value="上传">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			           	<input type="button" class="btn btn-sm btn-info"  value="取消" onclick="quxiao()">
					</div>
			</div>
				@endforeach
            </div>
              <div class="create">
								<button type="submit" class="btn btn-sm btn-success">提交</button>
							</div>
          </div>


			</form>
		</div>
	</div>
</div>
@include("html.footer")
</body>
</html>
<!-- // <script> -->
<!-- // 	function photoupd(){
// 		$("#xiu").attr({style:"display:none"});
// 		$("#photoupd").attr({style:""});
// 	}
// 	function quxiao(){
// 		$("#photoupd").attr({style:"display:none"});
// 		$("#xiu").attr({style:""});
// 	}
// 	//即点即改
// 	function phone(obj){
// 		var id=obj.id;
// 		$(".phonezhi").css("display","none");
// 		$(".phones").css("display","block");
// 	}
// 	function phoneupd(obj){
// 		var id=obj.id;
// 		var name=$(".xiu").val();
// 		var reg=/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}/;
// 		if(!reg.test(name)){
// 			alert("请注意手机号格式");
// 		}else{
// 			$.ajax({
// 			   type: "GET",
// 			   url: "{{url('phoneUpd')}}",
// 			   data: "name="+name+"&id="+id,
// 			   success: function(msg){ 
// 			   		if(msg==1){
// 			   			$(".phonezhi").html(name);
// 			   			$(".phonezhi").css("display","block");
// 						$(".phones").css("display","none");
						
// 			   		}
// 				}
// 			});
// 		}
		
// 	}
// 	function email(obj){
// 		var id=obj.id;
// 		$(".emailzhi").css("display","none");
// 		$(".emails").css("display","block");
// 	}
// 	function emailupd(obj){
// 		var id=obj.id;
// 		var name=$(".emailxiu").val();
// 		var reg=/^\w+@\w+\.(com|net|cn)$/;
// 		if(!reg.test(name)){
// 			alert("请注意邮箱格式");
// 		}else{
// 			$.ajax({
// 			   type: "GET",
// 			   url: "{{url('emailUpd')}}",
// 			   data: "name="+name+"&id="+id,
// 			   success: function(msg){ 
// 			   		if(msg==1){
// 			   			$(".emailzhi").html(name);
// 			   			$(".emailzhi").css("display","block");
// 						$(".emails").css("display","none");
						
// 			   		}
// 				}
// 			});
// 		}
		
// 	} -->
<!-- // </script> -->