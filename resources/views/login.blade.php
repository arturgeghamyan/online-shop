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
		a {
			color: #92badd;
			display: inline-block;
			text-decoration: none;
			font-weight: 400;
		}

		h2 {
			text-align: center;
			font-size: 16px;
			font-weight: 600;
			text-transform: uppercase;
			display: inline-block;
			margin: 40px 8px 10px 8px;
			color: #cccccc;
		}



		/* STRUCTURE */

		.wrapper {
			display: flex;
			align-items: center;
			flex-direction: column;
			justify-content: center;
			width: 100%;
			min-height: 100%;
			padding: 20px;
		}

		#formContent {
			-webkit-border-radius: 10px 10px 10px 10px;
			border-radius: 10px 10px 10px 10px;
			background: #fff;
			padding: 30px;
			width: 90%;
			max-width: 450px;
			position: relative;
			padding: 0px;
			-webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
			box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
			text-align: center;
		}

		#formFooter {
			background-color: #f6f6f6;
			border-top: 1px solid #dce8f1;
			padding: 25px;
			text-align: center;
			-webkit-border-radius: 0 0 10px 10px;
			border-radius: 0 0 10px 10px;
		}



		/* TABS */

		h2.inactive {
			color: #cccccc;
		}

		h2.active {
			color: #0d0d0d;
			border-bottom: 2px solid #5fbae9;
		}



		/* FORM TYPOGRAPHY*/

		input[type=button],
		input[type=submit],
		input[type=reset] {
			background-color: #56baed;
			border: none;
			color: white;
			padding: 15px 80px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			text-transform: uppercase;
			font-size: 13px;
			-webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
			box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
			-webkit-border-radius: 5px 5px 5px 5px;
			border-radius: 5px 5px 5px 5px;
			margin: 5px 20px 40px 20px;
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-ms-transition: all 0.3s ease-in-out;
			-o-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
		}

		input[type=button]:hover,
		input[type=submit]:hover,
		input[type=reset]:hover {
			background-color: #39ace7;
		}

		input[type=button]:active,
		input[type=submit]:active,
		input[type=reset]:active {
			-moz-transform: scale(0.95);
			-webkit-transform: scale(0.95);
			-o-transform: scale(0.95);
			-ms-transform: scale(0.95);
			transform: scale(0.95);
		}

		input[type=text] {
			background-color: #f6f6f6;
			border: none;
			color: #0d0d0d;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 5px;
			width: 85%;
			border: 2px solid #f6f6f6;
			-webkit-transition: all 0.5s ease-in-out;
			-moz-transition: all 0.5s ease-in-out;
			-ms-transition: all 0.5s ease-in-out;
			-o-transition: all 0.5s ease-in-out;
			transition: all 0.5s ease-in-out;
			-webkit-border-radius: 5px 5px 5px 5px;
			border-radius: 5px 5px 5px 5px;
		}

		input[type=text]:focus {
			background-color: #fff;
			border-bottom: 2px solid #5fbae9;
		}

		input[type=text]:placeholder {
			color: #cccccc;
		}



		/* ANIMATIONS */

		/* Simple CSS3 Fade-in-down Animation */
		.fadeInDown {
			-webkit-animation-name: fadeInDown;
			animation-name: fadeInDown;
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		@-webkit-keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0);
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none;
			}
		}

		@keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0);
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none;
			}
		}

		/* Simple CSS3 Fade-in Animation */
		@-webkit-keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@-moz-keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		.fadeIn {
			opacity: 0;
			-webkit-animation: fadeIn ease-in 1;
			-moz-animation: fadeIn ease-in 1;
			animation: fadeIn ease-in 1;

			-webkit-animation-fill-mode: forwards;
			-moz-animation-fill-mode: forwards;
			animation-fill-mode: forwards;

			-webkit-animation-duration: 1s;
			-moz-animation-duration: 1s;
			animation-duration: 1s;
		}

		.fadeIn.first {
			-webkit-animation-delay: 0.4s;
			-moz-animation-delay: 0.4s;
			animation-delay: 0.4s;
		}

		.fadeIn.second {
			-webkit-animation-delay: 0.6s;
			-moz-animation-delay: 0.6s;
			animation-delay: 0.6s;
		}

		.fadeIn.third {
			-webkit-animation-delay: 0.8s;
			-moz-animation-delay: 0.8s;
			animation-delay: 0.8s;
		}

		.fadeIn.fourth {
			-webkit-animation-delay: 1s;
			-moz-animation-delay: 1s;
			animation-delay: 1s;
		}

		/* Simple CSS3 Fade-in Animation */
		.underlineHover:after {
			display: block;
			left: 0;
			bottom: -10px;
			width: 0;
			height: 2px;
			background-color: #56baed;
			content: "";
			transition: width 0.2s;
		}

		.underlineHover:hover {
			color: #0d0d0d;
		}

		.underlineHover:hover:after {
			width: 100%;
		}



		/* OTHERS */

		*:focus {
			outline: none;
		}

		#icon {
			width: 60%;
		}








		/*canvas start */

		html,
		body {
			width: 100%;
			height: 100%;
			padding: 0px;
			margin: 0px;
			overflow: hidden;
			background: #191d1e;
			/* Old browsers */
			background: -moz-linear-gradient(0deg, #191d1e 50%, #283139 100%);
			/* FF3.6+ */
			background: -webkit-gradient(linear, left top, right bottom, color-stop(50%, #191d1e), color-stop(100%, #283139));
			/* Chrome,Safari4+ */
			background: -webkit-linear-gradient(0deg, #191d1e 50%, #283139 100%);
			/* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(0deg, #191d1e 50%, #283139 100%);
			/* Opera 11.10+ */
			background: -ms-linear-gradient(0deg, #191d1e 50%, #283139 100%);
			/* IE10+ */
			background: linear-gradient(0deg, #191d1e 50%, #283139 100%);
			/* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#191d1e', endColorstr='#283139', GradientType=1);
			/* IE6-9 fallback on horizontal gradient */
			background-attachment: fixed
		}

		#projector {
			position: absolute;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
		}

		.center-div {
			width: 580px;
			height: 374px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -290px;
			margin-top: -187px;
		}

		#preloaderDiv {
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -27px;
			margin-top: -27px;
		}

		#logo {
			opacity: 0;
			filter: alpha(opacity=0);
		}

		#date2014 {
			position: absolute;
			padding-left: 210px;
			padding-top: 15px;
			opacity: 0;
			top: 303px;
			left: 0;
			filter: alpha(opacity=0);
		}


		/*canvas end*/
	</style>
</head>

<body>
	<canvas id="projector">Your browser does not support the Canvas element.</canvas>

	<div class="wrapper fadeInDown">
		<div id="formContent">
			@if (session()->get('message'))
			<div class="alert alert-danger error-block mt-4">
				<ul class="error-list m-0">
					<li>{{session()->get('message')}}</li>
				</ul>
			</div>
			@elseif (session()->get('mail'))
			<div class="alert alert-danger error-block mt-4">
				<ul class="error-list m-0">
					<li>{{session()->get('mail')}}</li>
				</ul>
			</div>
			@endif
			<form class="p-4" action="{{url('/login')}}" method="post">
				@csrf
				<label>{{$errors->first('email')}}</label>
				<label>{{$errors->first('password')}}</label>
				<input class="form-control mb-1 mt-1 fadeIn second" name="email" placeholder="Email">
				<input class="form-control mb-1 mt-1 fadeIn third" name="password" type="password" placeholder="Password">
				<button class="fadeIn fourth" id="login">Log In</button>
			</form>
			<div id="formFooter">
				<a class="underlineHover" href="{{url('/password/recover')}}">Forgot Password?</a>
				<a class="underlineHover" href="{{url('/register')}}">Registrastion</a>
			</div>

		</div>
	</div>
</body>

</html>