@extends('template')

@section('nav')
<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						

						<li> {{ link_to('register/form', 'Sign Up', array('class' => '')) }}</li>

						<li>{{ link_to('password/remind','Forgot Password ?',array('class' => ''))}}</li>
						<li> {{link_to('contact/form', 'Contact',array('class' => '')) }}
					</ul>
				</div><!-- /.nav-collapse -->
@stop

@section('contenu')

@if(Session::has('error'))
<div class="alert alert-danger">
{{ Session::get('error')}}
</div>
@endif

<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
				{{ Form::open(array('url' => 'auth/login', 'method' => 'post', 'class' => 'form-vertical')) }}
					<!-- <form class="form-vertical"> -->
						<div class="module-head">
							<h3>Sign In</h3>
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
									<!-- <input class="span12" type="text" id="inputEmail" placeholder="Username"> -->
								</div>
							</div>

							<div class="control-group">
							<small class="text-danger">{{ Session::get('pass')}}</small>
								<div class="controls row-fluid">
									<div class="form-group {{ Session::has('pass') ? 'has-error' : '' }}">
								{{ Form::password('password', array('class' => 'span12', 'placeholder' => 'Password'))}}
								</div>
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
							
								<div class="controls clearfix">
								{{ Form::submit('login', array('class' => 'btn btn-primary pull-right' ))}}
								<label class="checkbox">
										{{ Form::checkbox('souvenir')}}Remind me
									</label>
								{{ Form::close()}}
										
								</div>
							</div>
						</div>
				
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->
@stop
					