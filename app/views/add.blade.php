@extends('template')

@section('contenu')
    
	<div class="wrapper">
		<div class="container">
		<div class="row">
		<div class="module module-login span6 offset3">
		{{ Form::open(array('url' => 'command/add')) }}
		<div class="module-head">
							<h3>Add a command</h3>
						</div>
						<div class="module-body">
							<div class="control-group">

							<small class="text-danger">{{ $errors->first('titre') }}</small>

								<div class="controls row-fluid">

								<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								{{ Form::text('titre', null, array('class' => 'span12'  , 'placeholder' => 'Type'))}}
								</div>
									
								</div>
							</div>

							<div class="control-group">
							<small class="text-danger">{{ $errors->first('contenu') }}</small>
								<div class="controls row-fluid">
									<div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
								{{ Form::textarea('contenu',null, array('class' => 'span12', 'placeholder' => 'Content'))}}
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