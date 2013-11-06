<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

	<style>
		.form-control:focus {
    		border-color: #F99610;
    		box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px #F99610;
		}
		.inline-list{padding-top: 10px;}
		.inline-list li{			
			list-style: none;
			display: inline;
			color: white;
			margin-right: 10px;			
		}
		.inline-list li a {
			text-decoration: none;
			color: white;			
		}
		.inline-list li a:hover {
			text-decoration: none;
			text-decoration: underline;			
		}
		.social-icons{
			padding-top: 10px;
		}
		.social-icons li{
			display: inline;
			list-style: none;
			margin-left: 10px;

		}

		.social-icons li a{
			color: white;
			text-decoration: none;
		}

		.social-icons li a:hover{
			color: gray;
		}
		/*
		.circle{
			padding: 13px;
			border: 5px solid white;
			border-radius: 100%;
			width: 5%;
			display: inline;
		}
	*/
	</style>

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
 	
 	<!-- <div class="row">
 		<div class="col-lg-4">sarasa</div>
 		<div class="col-lg-4">reasde</div>
 		<div class="col-lg-4">dlidfijs</div>
 	</div>
 	<div class="row">
 		<div class="col-lg-6">iiisdusd</div>
 		<div class="col-lg-6">sdsddssd</div>
 	</div>
 -->
 	<div class="container">
 		<div class="row" style=" color: white; background: #F99610;  text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);">
 			<div class="col-lg-12">
 				<h1 ><i class="fa fa-book"></i> eBooks - Libreria virtual</h1>
 			</div> 			
 		</div>
 		<div class="row" style="background: #FA503A; border-bottom: 3px solid red;" >
				<div class="col-lg-4">
					<p class="inline-list" style="color:white;">Bienvenido <b>{{Session::get('session_user.name')}}</b></p>
				</div>
	 			<div class="col-lg-8" >	 	
	 				<ul class="inline-list pull-right">
						<li>{{ link_to('main', 'Main') }}</li>
						@if(!Session::has('session_user.logged'))
							<li>{{ link_to_action('UserController@login', 'Login') }}</li>
						@endif
						<li>{{ link_to_action('UserController@register', 'Registrarse') }}</li>
						@if(Session::has('session_user.logged'))
							<li>{{link_to_action('UserController@logout','Logout')}}</li>
						@endif
					</ul>					
	 			</div>
 			</div>
 		{{--Contenido Dinamico--}} 		
		@yield('content')

		<div class="row" style="color: white; background: #F99610; text-align: right; border-top: 2px solid red;">
			<div class="col-lg-12">
				<ul class="social-icons" >
					<li><a href="#"><i class="fa  fa-twitter fa-2x"></i></a></li>
					<li><a href="#"><i class="fa  fa-facebook fa-2x"></i></a></li>
					<li><a href="#"><i class="fa  fa-google-plus fa-2x"></i></a></li>
					<li><a href="#"><i class="fa  fa-youtube fa-2x"></i></a></li>
				</ul>
				
				
				

				 
				<!-- <small>2013 &copy; eBooks - Desing by Raul Reyes</small> -->
			</div>
		</div>
		<div class="row" style="height: 300px; background: #FA503A; color: white">
			<div class="col-lg-4" style="padding-left: 100px">
				<h3>Servicios</h3>
				<blockquote >
				  @foreach(Config::get('ebook.footer.servicios') as $book)
				  	<p style="font-size: 10pt">{{$book}}</p>
				  @endforeach 
				</blockquote>
			</div>
			<div class="col-lg-4" style="padding-left: 100px">
				<h3>Contacto</h3>
				<blockquote >
				  @foreach(Config::get('ebook.footer.contacto') as $contact)
				  	<p style="font-size: 10pt">{{$contact}}</p>
				  @endforeach 
				</blockquote>
			</div>
			<div class="col-lg-4" style="padding-left: 100px">
				<h3>Amigos</h3>
				<blockquote >
				  @foreach(Config::get('ebook.footer.amigos') as $friends)
				  	<p style="font-size: 10pt">{{$friends}}</p>
				  @endforeach 
				</blockquote>
			</div>
		</div>
		<div class="row" style="text-align: right">
			<div class="col-lg-12">
				<small>2013 &copy; eBooks - Desing by Raul Reyes</small>
			</div>
		</div>		
	</div>
</body>
</html>