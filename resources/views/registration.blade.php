
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>User SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">



				@if($errors->any())
				@foreach ($errors->all() as $err)
				<li>{{$err}}</li>
				@endforeach
				@endif
				<form action="add" method="post">
					 @csrf
					<input class="text" type="text" name="username" placeholder="Username" required="required">
					<input class="text email" type="email" name="email" placeholder="Email" required="required">
					<input class="text w3lpass" type="email" name="confirm_email" placeholder="Confirm Email" required="required">
					<input class="text" type="text" name="phone" placeholder="Phone Number" required="required">
					
					
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="login"> Login Now!</a></p>
			</div>
		</div>

	</div>
</body>
</html>