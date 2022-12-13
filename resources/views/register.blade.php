<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
			color: #fff;
			background: #63738a;
			font-family: 'Roboto', sans-serif;
		}
		.form-control{
			height: 40px;
			box-shadow: none;
			color: #969fa4;
		}
		.form-control:focus{
			border-color: #5cb85c;
		}
		.form-control, .btn{        
			border-radius: 3px;
		}
		.signup-form{
			width: 400px;
			margin: 0 auto;
			padding: 30px 0;
		}
		.signup-form h2{
			color: #636363;
			margin: 0 0 15px;
			position: relative;
			text-align: center;
		}
		.signup-form h2:before, .signup-form h2:after{
			content: "";
			height: 2px;
			width: 30%;
			background: #d4d4d4;
			position: absolute;
			top: 50%;
			z-index: 2;
		}	
		.signup-form h2:before{
			left: 0;
		}
		.signup-form h2:after{
			right: 0;
		}
		.signup-form .hint-text{
			color: #999;
			margin-bottom: 30px;
			text-align: center;
		}
		.signup-form form{
			color: #999;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #f2f3f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}
		.signup-form .form-group{
			margin-bottom: 20px;
		}
		.signup-form input[type="checkbox"]{
			margin-top: 3px;
		}
		.signup-form .btn{        
			font-size: 16px;
			font-weight: bold;		
			min-width: 140px;
			outline: none !important;
		}
		.signup-form .row div:first-child{
			padding-right: 10px;
		}
		.signup-form .row div:last-child{
			padding-left: 10px;
		}    	
		.signup-form a{
			color: #fff;
			text-decoration: underline;
		}
		.signup-form a:hover{
			text-decoration: none;
		}
		.signup-form form a{
			color: #5cb85c;
			text-decoration: none;
		}	
		.signup-form form a:hover{
			text-decoration: underline;
		}  

	</style>
</head>
<body>
	<div class="signup-form">
		<form method="post" action="{{url('/registration')}}">
			@csrf
			<h2>Register</h2>
			<p class="hint-text">Create your account. It's free and only takes a minute.</p>
			<div class="alert alert-danger d-none error-block">
				<ul class="error-list"></ul>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<label>{{$errors->first('name')}}</label>
						<input class="form-control mb-1 mt-1" name="name" placeholder="Name">
					</div>
					<div class="col-6">
						<label>{{$errors->first('surname')}}</label>

						<input class="form-control mb-1 mt-1" name="surname" placeholder="Surname">
					</div>
				</div>        	
			</div>
			<div class="form-group">
				<label>{{$errors->first('age')}}</label>
				<input class="form-control mb-1 mt-1" name="age" placeholder="Age">
			</div>
			<div class="form-group">
				<label>{{$errors->first('email')}}</label>
				<input class="form-control mb-1 mt-1" name="email" placeholder="Email">
			</div>
			<div class="form-group pass_show">
				<label>{{$errors->first('password')}}</label>
				<input class="form-control mb-1 mt-1" name="password" type="password" placeholder="Password">
			</div>
			<div class="form-group pass_show">
				<label>{{$errors->first('cpassword')}}</label>
				<input class="form-control mb-1 mt-1" name="cpassword" type="password" placeholder="Confirm Password">
			</div>    
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" > I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
			</div>
			<div class="form-group">
				<button class="btn btn-info" id="register" >Register</button>
			</div>
		</form>
		<div class="text-center">Already have an account? <a href="/">Sign in</a></div>
	</div>
</body>
</html>