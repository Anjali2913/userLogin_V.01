<!DOCTYPE html>
<html>
<head>
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
		<h1>Edit User Information</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				
				<form action="update_form" method="post" autocomplete="off">
					<p>Profile!</p>
					 @csrf

					 @if($errors->any())
				@foreach ($errors->all() as $err)
				<li>{{$err}}</li>
				@endforeach
				@endif

					 @foreach($data as $user) 
					 
                     <input class="text-username" type="text" name="username" placeholder ="Username"  readonly style ="border: 0px none;" disabled="disabled">
					<input class="text" type="text" name="username" value="{{ $user->username}}" autocomplete="off" style ="margin-top: 2%">
                    <input class="text-username" type="text" name="username" placeholder ="Email"  style ="border: 0px none; margin-top: 5%;" disabled="disabled">
					<input class="text email" type="email" name="email" value="{{ $user->email}}" autocomplete="off" style ="margin-top: 2%;">
                    <input class="text-username" type="text" name="username" placeholder ="Phone Number" readonly style ="border: 0px none;" disabled="disabled">
					<input class="text" type="text" name="phone" value="{{ $user->phone}}" autocomplete="off"  style ="margin-top: 2%">
					@endforeach
                    
                    <input type="submit" value="update Data"><a href="login"></a>
                    <p><a href="login">Log Out</a></p>
				</div>
				</form>

			</div>
		</div>
	</div>
	<!-- //main -->
</body>
</html>