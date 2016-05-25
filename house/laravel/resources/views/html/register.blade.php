<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>eLearn - Register</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
    <!-- CSS Files -->
	<link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.min.css" />
	<!-- / CSS Files -->
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('html.top')
    <section class="content content-light">
        <div class="container">
            <!-- Profil create stage - dotted -->
            <div class="row profil-create-stage">
                <div class="col-md-4 stage-first">
                    <a href="register.htm">
                        <span>注册您的身份</span>
                        <span class="stage-dot"></span>
                    </a>
                </div>
                <div class="col-md-4 stage-last">
                    <a href="register.htm">
                        <span>更新您的资料</span>
                        <span class="stage-dot"></span>
                    </a>
                </div>
            </div>
            
            <hr class="invisible" />
            <hr class="invisible" />
            <hr class="invisible" />
            
            <form action="{{URL('useradd')}}" role="form" method="post">
                <h2 class="title-form">个人信息</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fieldInputUsername">真实姓名</label>
                            <input type="text" class="form-control input-lg" name="u_name"  id="fieldInputUsername" placeholder="请输入你的用户名" />
							<span id="u_names"></span>
                        </div>
                        <div class="form-group">
                            <label for="fieldInputPassword1">密码</label>
                            <input type="password" class="form-control input-lg" name="u_pwd"  id="fieldInputPassword1" placeholder="请输入您的密码" />
							<span id="u_pwdss"></span>
                        </div>
                        <div class="form-group">
                            <label for="fieldSelectGender">国家</label>
                            <select class="form-control input-lg" id="country" name="country" onchange="select_country('country','city')">
                                <option value="">请选择</option>
								@foreach ($region as $k=>$v)
                                <option value="{{$v->region_id}}">{{$v->region_name}}</option>
                                @endforeach
                            </select>
							<span id="u_country"></span>
                        </div>
						<div class="form-group">
                            <label for="fieldInputNickname">昵称</label>
                            <input type="text" class="form-control input-lg" name="u_nickname"  id="fieldInputNickname" placeholder="请输入你的昵称" />
							<span id="u_nicknames"></span>
                        </div>		
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fieldInputEmail1">邮箱地址</label>
                            <input type="email" class="form-control input-lg" name="u_email" id="fieldInputEmail1" placeholder="请输入您的邮箱地址" />
							<span id="u_emails"></span>
                        </div>
                        <div class="form-group">
                            <label for="fieldInputPassword2">确认密码</label>
                            <input type="password" class="form-control input-lg" name="u_pwds" id="fieldInputPassword2" placeholder="请保持和第一次密码一致" />
							<span id="pwdss"></span>
                        </div>
                        <div class="form-group">
                            <label for="fieldSelectCountry">省份</label>
                            <select class="form-control input-lg" id="city" name="city" onchange="select_country('city','place')" >
                                <option value="-1">请选择</option>		
                            </select>
							<span id="u_city"></span>
                        </div>
						 <div class="form-group">

                            <label for="fieldInputsex1">性别</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" id="fieldInputsex" value="男"   name="u_sex"/>男&nbsp;&nbsp;
							<input type="radio"  id="fieldInputsex" value="女"  name="u_sex" />女
							<span id="sex"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fieldInputBirth">身份证号</label>
                            <input type="text" class="form-control input-lg" name="u_ressadd" id="fieldInputBirth" placeholder="请输入您的身份证号" />
							<span id="ressadd"></span>
                        </div>
                       
                        <div class="form-group">
                            <label for="fieldInputPostalcode">电话号码</label>
                            <input type="text" class="form-control input-lg" name="u_phone" id="fieldInputPostalcode" placeholder="请输入您的电话号码" />
							<span id="phone"></span>
                        </div>
                         <div class="form-group">
                            <label for="fieldSelectCountry">城市</label>
                            <select class="form-control input-lg" id="place" name="place" >
                                <option value="-1">请选择</option>		
                            </select>
							<span id="u_place"></span>
                        </div>
						 <div class="form-group">
                            <label for="fieldInputPassword1">注册类型</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" id="fieldInputArea" value="1"   name="u_area_id"/>出租&nbsp;&nbsp;
							<input type="radio"  id="fieldInputArea" value="2"  name="u_area_id" />租房
							<span id="u_shenfen"></span>
                        </div>
                    </div>
                </div>
                <hr class="invisible" />
                <hr class="invisible" />               
                <p><input type="submit" class="btn btn-theme btn-orange" value="注册" /> <input type="reset" class="btn btn-theme btn-green" value="取消" /></p>
            </form>
        </div>        
    </section>
   @include("html.footer");
    <!-- JavaScript Files -->
    <script src="plugin/jquery-1.10.2.min.js"></script>
    <script src="plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugin/jquery.cuteTime.min.js"></script>
    <script src="script/script.js"></script>
    <!-- / JavaScript Files -->
</body>
</html>
<script type="text/javascript">

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
	//验证昵称的唯一性
	$("#fieldInputNickname").blur(function(){
		var names=$("#fieldInputNickname").val();
		 $.ajax({
			type:"POST",
			url:"{{url('nickname')}}",
			data: "names="+names,
			success:function(msg){
				if(msg==1){
					$("#u_nicknames").html("<span style='color:green'>此昵称已被占用！</span>");
				}else{
					$("#u_nicknames").html("<span></span>");
				}
			}
		 })
	})


	//注册正则 
	//用户名
	$("#fieldInputUsername").blur(function(){
		var name=$("#fieldInputUsername").val();
		var reg=/^[\u4e00-\u9fa5]{2,}$/;
		if(!reg.test(name)){
			$("#u_names").html("<span style='color:green'><b>用户名由两位的汉字组成！</b></span>");
		}else{
			$("#u_names").html("<span></span>");
		}
	})
	//密码
	$("#fieldInputPassword1").blur(function(){
		var pwd=$("#fieldInputPassword1").val();
		var reg = /^.{6,}$/;
		if(!reg.test(pwd)){
			$("#u_pwdss").html("<span style='color:green'><b>密码必须六位以上！</b></span>");
		}else{
			$("#u_pwdss").html("<span></span>");
		}
	})
	//确认密码
	$("#fieldInputPassword2").blur(function(){
		var pwd=$("#fieldInputPassword1").val();
		var pwds=$("#fieldInputPassword2").val();
		if(pwds!=pwd){
			$("#pwdss").html("<span style='color:green'><b>两次密码必须一致！</b></span>");
		}else{
			$("#pwdss").html("<span></span>");
		}
	})
	//三级联动
	$("#country").change(function(){
		var country=$("#country").val();
		if(country==""){
			$("#u_country").html("<span style='color:green'><b>必选！</b></span>");
		}else{
			$("#u_country").html("<span></span>");
		}
	})
	$("#city").change(function(){
		var city=$("#city").val();
		if(city=="-1"){
			$("#u_city").html("<span style='color:green'><b>必选！</b></span>");
		}else{
			$("#u_city").html("<span></span>");
		}
	})
	$("#place").change(function(){
		var place=$("#place").val();
		if(place=="-1"){
			$("#u_place").html("<span style='color:green'><b>必选！</b></span>");
		}else{
			$("#u_place").html("<span></span>");
		}
	})

	//身份选择 和 性别
	$("#fieldInputArea").blur(function(){
		var shenfen=$("#fieldInputArea").val();
		if(shenfen==""){
			$("#u_shenfen").html("<span style='color:green'><b>必选！</b></span>");
		}else{
			$("#u_shenfen").html("<span></span>");
		}
	})
	$("#fieldInputsex").blur(function(){
		var sex=$("#fieldInputsex").val();
		if(sex==""){
			$("#sex").html("<span style='color:green'><b>必选！</b></span>");
		}else{
			$("#sex").html("<span></span>");
		}
	})

	//邮箱验证
	$("#fieldInputEmail1").blur(function(){
		var email=$("#fieldInputEmail1").val();
		var reg=/^\w+@\w+\.(com|net|cn)$/;
		if(!reg.test(email)){
			$("#u_emails").html("<span style='color:green'><b>邮箱格式不正确</b></span>");
		}else{
			$("#u_emails").html("<span></span>");
		}
	})
	//身份证号
	$("#fieldInputBirth").blur(function(){
		var ress=$("#fieldInputBirth").val();
		var reg=/^\d{18}|\d{17}x$/;
		if(!reg.test(ress)){
			$("#ressadd").html("<span style='color:green'><b>请输入正确的身份证号！</b></span>");
		}else{
			$("#ressadd").html("<span></span>");
		}
	})
	//电话号码
	$("#fieldInputPostalcode").blur(function(){
			var phone=$("#fieldInputPostalcode").val();
			var reg=/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}/;
			if(!reg.test(phone)){
				$("#phone").html("<span style='color:green'><b>请输入正确的手机号！</b></span>");
			}else{
			$("#phone").html("<span></span>");
		}
		})
</script>