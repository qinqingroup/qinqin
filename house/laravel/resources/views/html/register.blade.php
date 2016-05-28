<!DOCTYPE html>
<html>
<head>
<title>Register</title>
@include("html.top")
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>Register</h3>
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
						<input type="text"   placeholder="Name" required="" >
						<input type="text"   placeholder="Email Adress" required="" >
						<input type="password"  placeholder="Password " required="">
						
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" value="Sign Up">
				           </label>
					</form>
					<p>Already have a Real Home account? <a href="{{url('login')}}">Login</a></p>
				</div>
			
	</div>
</div>
</div>
<!--//contact-->
@include("html.footer")
</body>
</html>