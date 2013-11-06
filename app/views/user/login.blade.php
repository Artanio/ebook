@section('content')

<!-- <form method="post" accion="{{ action('UserController@authenticate') }}">
	<input type="text" name="user" required><br>
	<input type="password" name="pass" required><br>
	<input type="submit" value="login"><br>
</form>
-->
<div class="row">
	<div class="col-lg-12 hidden-xs">
		<div class="page-header">
			<h1>eBooks <small>Formulario de Login</small></h1>
		</div>
	</div>
</div>
<div class="row" style="margin-bottom: 100px">
	<div class="col-lg-8 col-md-5">	
		{{ Form::open(array('action'=>'UserController@authenticate','method'=>'post', 'class'=>'form-horizontal')); }}
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-3 control-label">Username</label>
				<div class="col-lg-3">
					{{  Form::text('user', null, array('class'=>'form-control', 'placeholder'=>'nombre de usuario')); }}
				</div>
				<span class="col-lg-6 text text-danger">{{$errors->first('username','<i class="fa fa-exclamation-triangle"></i> :message');}} </span>
			</div>
			<div class="form-group"> 
				<label for="inputPassword1" class="col-lg-3 control-label">Password</label>
				<div class="col-lg-3">
					{{  Form::password('pass',  array('class'=>'form-control', 'placeholder'=>'Contraseña')); }}
				</div>
				<span class="col-lg-6 text text-danger">{{$errors->first('mail','<i class="fa fa-exclamation-triangle"></i> :message');}}</span>	
			</div>			
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" class="btn btn-warning">Ingresar</button>
				</div>
			</div>
		{{ Form::close(); }}
	</div>
</div>
@stop