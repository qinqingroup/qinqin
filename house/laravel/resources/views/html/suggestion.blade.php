<!DOCTYPE html>
<html>
<head>
<title>Suggestion</title>
@include("html.top")
<!--contact-->
<div class="feedback">
	<div class="container">
		<h3>Make a Suggestion</h3>
		<div class="feedback-top">
			<form>
				<input type="text"  placeholder="Name"  required="">
				<input type="text"  placeholder="Email "  required="">
				<input type="text"  placeholder="Phone Number " required="" >
				<input type="text"  placeholder="Subject " required="" >
				<textarea  placeholder="Suggestion" requried=""></textarea>
				 <label class="hvr-sweep-to-right">
	           	<input type="submit" value="Submit">
	           </label>
			</form>
		</div>
	</div>
</div>
<!--//contact-->
@include("html.footer")
</body>
</html>