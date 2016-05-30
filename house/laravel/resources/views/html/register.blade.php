<!DOCTYPE html>
<html>
<head>
<title>Login</title>
@include("html.top")
<!--//header-->
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>欢迎注册</h3>
		<div class="login-top">
		<div class="container">
		<div class="loan-col">
		<form action="{{url('userAdd')}}"  method="post" onsubmit="return login()">
			<div class="col-loan">
				<ul class="loan-col1">
					<li><span>注册类型</span> </li><label>:</label>
					<li class="loan-list-top">
						<input type="radio" value="1" id="area" name="u_area_id" placeholder="" required="">出租
						<input type="radio" value="2" id="area" name="u_area_id" placeholder="" required="">租房
					</li>
					<span id="areas"></span>
				</ul>
				<ul class="loan-col1">
					<li><span>用户名</span> </li><label>:</label>
					<li class="loan-list-top">
						<input type="text" value="" placeholder="" required="" name="u_name" id="u_name">
					</li>
					<span id="name"></span>
				</ul>
				<ul class="loan-col1">
					<li><span>昵称 </span></li><label>:</label>
					<li class="loan-list-top">
						<input type="text" value="" placeholder="" required="" name="u_nickname" id="u_nickname">
					</li>
					<span id="nickname"></span>
				</ul>
			
				<ul class="loan-col1">
					<li><span>密码</span></li><label>:</label>
					<li class="loan-list-top">
						<input type="password" value="" placeholder="" required="" name="u_pwd" id="u_pwd">
					</li>
					<span id="s_pwd"></span>
				</ul>
				<ul class="loan-col1">
					<li><span>确认密码 </span></li><label>:</label>
					<li class="loan-list-top">
						<input type="password" value="" placeholder="" required="" id="u_pwds" name="u_pwds">
					</li>
					<span id="s_pwds"></span>
				</ul>
				<ul class="loan-col1">
					<li><span>性别 </span></li><label>:</label>
					<li class="loan-list-top">
						<input type="radio" value="男" name="u_sex" placeholder="" required="">男
						<input type="radio" value="女" name="u_sex" placeholder="" required="">女
					</li>
					<span id="sex"></span>
				</ul>
				<ul class="loan-col1">
					<li><span>电话号码</span></li><label>:</label>
					<li class="loan-list-top">
						<input type="text" value="" placeholder="" required="" name="u_phone" id="u_phone">
					</li>
					<span id="phones"></span>
				</ul>
				<ul class="loan-col1">
					<li><span>获取手机短信验证码：</span> </li><label>:</label>
					<li class="loan-list-top">
						<input type="text" value="" placeholder="" required="" name="u_tel" id="u_tel">
						<button type="button" id='tel' class="btn btn-sm btn-success">点击获取短信验证码</button>
					</li>
				</ul>

				<ul class="loan-col1">
					<li><span>身份证号</span> </li><label>:</label>
					<li class="loan-list-top">
						<input type="text" value="" placeholder="" required="" name="u_ressadd" id="u_ressadd">
					</li>
					<span id="ressadds"></span>
				</ul>
				<ul class="loan-col1">
					<li><span>地址</span> </li><label>:</label>
					<li class="loan-list-top">
						<select class="drop-select1" id="country" name="country" onchange="select_country('country','city')">
							<option value="-1"> 请选择</option>
							@foreach ($region as $k=>$v)
								<option value="{{$v->region_id}}">{{$v->region_name}}</option>
							@endforeach
						</select>
						<span id="countrys"></span>
						<select class="drop-select1"  id="city" name="city" onchange="select_country('city','place')" >
							<option value=""> 请选择</option>
						</select>
						<span id="citys"></span>
						<select class="drop-select1" id="place" name="place" >
							<option value=""> 请选择</option>
						</select>
						<span id="places"></span>
					</li>
				</ul>
				<ul class="loan-col1">
					<li><span>邮箱</span></li><label>:</label>
					<li class="loan-list-top"><input type="text" value="" name="u_email" id="u_email" placeholder="" required=""></li>
					<span id="emails"></span>
				</ul>
				<p>请正确填写自己的个人信息哦！</p>
				<div class="sub">
					<label class="hvr-sweep-to-right"><input type="submit" value="注册" placeholder=""></label>
				</div>
			</div>
			</form>
					<div class="form-info">
						<p>如果已经注册，请点击 <a href="{{url('login')}}">登陆</a></p>
					</div>
		</div>
	</div>
	</div>
</div>
</div>
<!--//contact-->
@include("html.footer")
</body>
</html>
<script>
//定义一个全局变量
var gload="";
	 //多级联动  优化后代码
    function select_country(cursel,nextsel){
        var id=$("#"+cursel).val();
        $.ajax({
            type:"GET",
            url:"{{url('regs')}}",
            data: "id="+id,
            dataType: 'json',
            success:function(msg){
                var str="";
                str+="<option value='-1'>请选择</option>";
                for(a in msg){
                    str+="<option value='"+msg[a]['region_id']+"'>"+msg[a]['region_name']+"</option>";
                }
                $("#"+nextsel).html(str);
                if(cursel=="country") $("#place").html("<option value='-1'>请选择</option>");
            }
        });
    }


    //验证用户名
    $("#u_name").blur(function(){
		var name=$("#u_name").val();
		var reg=/^[\u4e00-\u9fa5]{2,}$/;
		if(name==""){
			$("#name").html("<span style='color:green'>用户名不得为空</span>");
				gload=0;	
		}else{
			if(!reg.test(name)){
				$("#name").html("<span style='color:green'>用户名由两位的汉字组成!</span>");
				gload=0;
			}else{
				$("#name").html("<span></span>");
				gload=1;
			}
		}
	})
	//验证昵称的唯一性
	$("#u_nickname").blur(function(){
		var names=$("#u_nickname").val();
		 $.ajax({
			type:"GET",
			url:"{{url('nickname')}}",
			data: "names="+names,
			success:function(msg){
				if(names==""){
					$("#nickname").html("<span style='color:green'>昵称不得为空！</span>");
					gload=0;	
				}else{
					if(msg==1){
					$("#nickname").html("<span style='color:green'>此昵称已被占用！</span>");
					gload=0;
				}else{
					$("#nickname").html("<span></span>");
					gload=1;
				}
				}
				
			}
		 })
	})
	//密码
	$("#u_pwd").blur(function(){
		var pwd=$("#u_pwd").val();
		var reg = /^.{6,}$/;
		if(pwd==""){
			$("#s_pwd").html("<span style='color:green'><b>密码不得为空</b></span>");
				gload=0;	
		}else{
			if(!reg.test(pwd)){
				$("#s_pwd").html("<span style='color:green'><b>密码必须六位以上！</b></span>");
				gload=0;
			}else{
				$("#s_pwd").html("<span></span>");
				gload=1;
			}
		}
	})
	//确认密码
	$("#u_pwds").blur(function(){
		var pwd=$("#u_pwd").val();
		var pwds=$("#u_pwds").val();
		if(pwds==""){
			$("#s_pwds").html("<span style='color:green'><b>确认密码不得为空</b></span>");
				gload=0;	
		}else{
			if(pwds!=pwd){
				$("#s_pwds").html("<span style='color:green'><b>两次密码必须一致！</b></span>");
				gload=0;
			}else{
				$("#s_pwds").html("<span></span>");
				gload=1;
			}
		}
	})
	//三级联动 
	$("#place").change(function(){
		var place=$("#place").val();
		if(place=="-1"){
			$("#places").html("<span style='color:green'><b>必选！</b></span>");
			gload=0;
		}else{
			$("#places").html("<span></span>");
			gload=1;
		}
	})

	//身份选择 和 性别
	$("#area").blur(function(){
		var shenfen=$("#area").val();
		if(shenfen==""){
			$("#areas").html("<span style='color:green'><b>必选！</b></span>");
			gload=0;
		}else{
			$("#areas").html("<span></span>");
			gload=1;
		}
	})

	//获取手机短信验证码、\
	$('#tel').click(function(){
		var phone=$("#u_phone").val();
			var reg=/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}/;
			if(phone==""){
						alert("电话号码不能为空！");
					}else{
				if(!reg.test(phone)){
						alert('请输入正确的手机号！')
					gload=0;
				}else{
						
					$.ajax({
					   type: "GEt",
					   url: "{{url('tel')}}",
					   data: "phone="+phone,
					   success: function(msg){
					     alert("发送成功");
					   }
					});

				}
			}


	});


	//邮箱验证
	$("#u_email").blur(function(){
		var email=$("#u_email").val();
		var reg=/^\w+@\w+\.(com|net|cn)$/;
		if(email==""){
			$("#emails").html("<span style='color:green'><b>邮箱不得为空</b></span>");
				gload=0;	
		}else{
			if(!reg.test(email)){
				$("#emails").html("<span style='color:green'><b>邮箱格式不正确</b></span>");
				gload=0;
			}else{
				$("#emails").html("<span></span>");
				gload=1;
			}
		}
	})
	//身份证号
	$("#u_ressadd").blur(function(){
		var ress=$("#u_ressadd").val();
		var reg=/^\d{18}|\d{17}x$/;
		if(ress==""){
			$("#ressadds").html("<span style='color:green'><b>身份证号不得为空</b></span>");
				gload=0;	
		}else{
			if(!reg.test(ress)){
				$("#ressadds").html("<span style='color:green'><b>请输入正确的身份证号！</b></span>");
				gload=0;
			}else{
				$("#ressadds").html("<span></span>");
				gload=1;
			}
		}
	})
	//电话号码
	$("#u_phone").blur(function(){
		var phone=$("#u_phone").val();
		var reg=/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}/;
		if(phone==""){
			$("#phones").html("<span style='color:green'><b>电话号不得为空</b></span>");
			gload=0;	
		}else{
			if(!reg.test(phone)){
				$("#phones").html("<span style='color:green'><b>请输入正确的手机号！</b></span>");
				gload=0;
			}else{
				$("#phones").html("<span></span>");
				gload=1;
			}
		}
	})

	function login(){
		if(gload==0){
			alert("请正确填写您身份的信息");
			return false;
		}else if(gload==1){
			return true;
		}
	}
</script>