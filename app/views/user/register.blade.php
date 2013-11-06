@section('content')
<div class="row">
	<div class="col-lg-12 hidden-xs">
		<div class="page-header">
			<h1>eBooks <small>Formulario de registro</small></h1>
		</div>
	</div>
</div>
<div class="row" style="margin-bottom: 100px">
	<div class="col-lg-8 col-md-5">	
		{{ Form::open(array('action'=>'UserController@validate','method'=>'post', 'class'=>'form-horizontal')); }}
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-3 control-label">Username</label>
				<div class="col-lg-3">
					{{  Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'ingrese su nombre de usuario')); }}
				</div>
				<span class="col-lg-6 text text-danger">{{$errors->first('username','<i class="fa fa-exclamation-triangle"></i> :message');}} </span>
			</div>
			<div class="form-group"> 
				<label for="inputPassword1" class="col-lg-3 control-label">email</label>
				<div class="col-lg-3">
					{{  Form::text('mail', null, array('class'=>'form-control', 'placeholder'=>'ingrese su E-mail')); }}
				</div>
				<span class="col-lg-6 text text-danger">{{$errors->first('mail','<i class="fa fa-exclamation-triangle"></i> :message');}}</span>	
			</div>
			<div class="form-group">
				<label for="inputPassword1" class="col-lg-3 control-label">Password</label>
				<div class="col-lg-3">
					{{  Form::password('pass', array('class'=>'form-control', 'placeholder'=>'ingrese su password')); }}
				</div>
				<span class="col-lg-6 text text-danger">{{$errors->first('pass','<i class="fa fa-exclamation-triangle"></i> :message');}} </span>
			</div>
			<div class="form-group">
				<label for="inputPassword1" class="col-lg-3 control-label">confirmation</label>
				<div class="col-lg-3">
					{{ Form::password('pass_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirmacion')); }}
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" class="btn btn-warning">Registrarse</button>
				</div>
			</div>
		{{ Form::close(); }}
	</div>
</div>
@stop