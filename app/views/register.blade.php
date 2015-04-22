@extends('template')

@section('nav')
<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						

						<li> {{ link_to('auth/login', 'Sign In', array('class' => '')) }}</li>

						<li> {{link_to('contact/form', 'Contact',array('class' => '')) }}
					</ul>
				</div><!-- /.nav-collapse -->
@stop
@section('contenu')
   
 	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
				{{ Form::open(array('url' => 'register/form', 'method' => 'post', 'class' => 'form-vertical')) }}
					
						<div class="module-head">
							<h3>Sign Up</h3>
						</div>
						<div class="module-body">
							<div class="control-group">

							<small class="text-danger">
								{{ $errors->first('name')}}
								</small>

								<div class="controls row-fluid">

								<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								{{ Form::text('name', null, array('class' => 'span12'  , 'placeholder' => 'Username'))}}
								</div>
									
								</div>
							</div>

							<div class="control-group">
							<small class="text-danger">{{ $errors->first('email') }}</small>
								<div class="controls row-fluid">
									<div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
								{{ Form::email('email',null, array('class' => 'span12', 'placeholder' => 'Email'))}}
								</div>
								</div>
							</div>

							<div class="control-group">
							<small class="text-danger">{{ $errors->first('password') }}</small>
								<div class="controls row-fluid">
									<div class="form-group {{ $errors->has('password') ? 'has-error has-feedback' : '' }}">
								{{ Form::password('password', array('class' => 'span12', 'placeholder' => 'Password')) }}
								</div>
								</div>
							</div>	

							<div class="control-group">
								<div class="controls row-fluid">
									<div class="form-group">
							{{ Form::password('Confirmation_mot_de_passe', array('class' => 'span12', 'placeholder' => 'Confirm Password')) }}
									</div>
								</div>
							</div>

						</div>
						<div class="module-foot">
							<div class="control-group">
							
								<div class="controls clearfix">
								{{ Form::submit('Register', array('class' => 'btn btn-primary pull-right' )) }}
								<label class="checkbox">
										{{ Form::checkbox('admin')}}Admin
									</label>
								{{ Form::close()}}
										
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div> <!--/.wrapper-->
@stop