<!DOCTYPE html>
<html>
<head>
<title>Login</title>
@include("html.top")
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>Login</h3>
		<div class="login-top">
				<div class="form-info">
					<form action="{{url('logins')}}" method="post">
						<input type="text" class="text"  name="u_name" placeholder="Email Adress" required="">
						<input type="password"   name="u_pwd" placeholder="Password" required="">
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" value="Submit">
				            </label>
					         <div class="create">
								<h4>还没注册，点击&nbsp;→</h4>
								<a class="hvr-sweep-to-right" href="{{url('reg')}}">注册</a>
								<div class="clearfix"> </div>
							</div>
					</form>
				</div>
			
	</div>
</div>
</div>
@include("html.footer")
</body>
</html>