@extends('template')
@section('contenu')
    
		<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
				{{ Form::open(array('url' => 'contact/form', 'method' => 'post', 'class' => 'form-vertical')) }}
					
						<div class="module-head">
							<h3>Contact Us</h3>
						</div>
						<div class="module-body">
							<div class="control-group">

							<small class="text-danger">{{ $errors->first('nom') }}</small>

								<div class="controls row-fluid">

								<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								{{ Form::text('nom', null, array('class' => 'span12'  , 'placeholder' => 'Your Name'))}}
								</div>
									
								</div>
							</div>

							<div class="control-group">
							<small class="text-danger">{{ $errors->first('email') }}</small>
								<div class="controls row-fluid">
									<div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
								{{ Form::email('email',null, array('class' => 'span12', 'placeholder' => 'Your Email'))}}
								</div>
								</div>
							</div>

							<div class="control-group">
							<small class="text-danger">{{ $errors->first('texte') }}</small>
								<div class="controls row-fluid">
									<div class="form-group {{ $errors->has('texte') ? 'has-error' : '' }}">
								{{ Form::textarea ('texte', null, array('class' => 'span12', 'placeholder' => 'Your message')) }}
								</div>
								</div>
							</div>	

						</div>
						<div class="module-foot">
							<div class="control-group">
							
								<div class="controls clearfix">
								{{ Form::submit('Submit !', array('class' => 'btn btn-info pull-right')) }}
								{{ Form::close()}}
								<a href="javascript:history.back()" class="btn btn-primary">
  <span class="glyphicon glyphicon-circle-arrow-left"></span> Back
   </a>
										
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div> <!--/.wrapper-->
@stop