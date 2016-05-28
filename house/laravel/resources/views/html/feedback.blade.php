<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
@include("html.top")
<!--contact-->
<div class="feedback">
	<div class="container">
		<h3>Feedback</h3>
		<div class="feedback-top">
			<form>
				<input type="text"  placeholder="Name"  required="">
				<input type="text"  placeholder="Email " required="" >
				<textarea  placeholder="Feedback" requried=""></textarea>
				 <label class="hvr-sweep-to-right">
	           	<input type="submit" value="Send Feedback">
	           </label>
			</form>
		</div>
	</div>
</div>
<!--//contact-->
@include("html.footer")
</body>
</html>