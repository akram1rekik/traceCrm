@extends('template')
@section('contenu')
 @if(Session::has('status'))
<div class="alert alert-success">{{ Session::get('status') }}</div>
 @else
<!-- <div class="panel panel-primary">   
<div class="panel-heading">Oubli du mot de passe, entrez votre email :</div>  
<div class="panel-body">
<div class="col-sm-">                       
{{ Form::open(array('action' => 'RemindersController@postRemind', 'method' => 'post', 'class' => 'form-horizontal panel')) }}     -->  
<div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="module module-login span4 offset4">
        {{ Form::open(array('action' => 'RemindersController@postRemind', 'method' => 'post', 'class' => 'form-vertical')) }}
          
            <div class="module-head">
              <h3>Forgot Password</h3>
            </div> 
            <div class="module-body">
              <div class="control-group">                     
<small class="text-danger">{{ Session::get('error') }}</small>                         
<div class="controls row-fluid ">
<div class="form-group {{ $errors->has('error') ? 'has-error' : '' }}">                         
 {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}                        
  </div> 
  </div>
  </div>
  </div>
  <div class="module-foot">
              <div class="control-group">
              
                <div class="controls clearfix">                         
   {{ Form::submit('Envoyer', array('class' => 'btn btn-primary pull-right')) }}                      
    {{ Form::close() }}
    <a href="javascript:history.back()" class="btn btn-primary">
  <span class="glyphicon glyphicon-circle-arrow-left"></span> Back
   </a>
   </div>
   </div>
</div>  
  </div>
   </div>
   </div>
   </div>
   
   

   
   @endif
  </div>
   @stop