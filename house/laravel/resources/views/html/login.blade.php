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
				<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>
				<div class="form-info">
					<form>
						<input type="text" class="text" placeholder="Email Adress" required="">
						<input type="password"  placeholder="Password" required="">
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" value="Submit">
				           </label>
					</form>
				</div>
			<div class="create">
				<h4>New To Real Home?</h4>
					<a class="hvr-sweep-to-right" href="{{url('register')}}">Create an Account</a>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
</div>
<!--//contact-->
@include("html.footer")
</body>
</html>