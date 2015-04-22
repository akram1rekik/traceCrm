@extends('template')

@section('contenu')    
      
@if(Session::has('error'))
 <div class="alert alert-danger">{{ Session::get('error') }}</div>       
@endif        
<!-- <div class="panel panel-primary">              
<div class="panel-heading">Création d'un nouveau mot de passe</div>
    <div class="panel-body">              
      <div class="col-sm-12">
{{ Form::open(array('action' => 'RemindersController@postReset', 'method' => 'post', 'class' => 'form-horizontal panel')) }}             
 {{ Form::hidden('token', $token) }}                      
 <div class="form-group">                      
 {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}                    
 </div>                      
 <div class="form-group">                        
 {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Mot de passe')) }}                      
 </div>                   
   <div class="form-group">                      
    {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirmation mot de passe')) }}                     
    </div>                    
    {{ Form::submit('Envoyer', array('class' => 'btn btn-primary pull-right')) }}                    
    {{ Form::close() }}                
    </div>           
    </div>      
      </div>  
       </div> -->
       <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="module module-login span4 offset4">
        {{ Form::open(array('action' => 'RemindersController@postReset', 'method' => 'post', 'class' => 'form-vertical')) }}
        {{ Form::hidden('token', $token) }}
            <div class="module-head">
              <h3>Reset Password</h3>
            </div>
            <div class="module-body">
              <div class="control-group">

                <div class="controls row-fluid">

                <div class="form-group ">
                {{ Form::email('email', null,array('class' => 'span12', 'placeholder' => 'Email')) }} 
                </div>
                  <!-- <input class="span12" type="text" id="inputEmail" placeholder="Username"> -->
                </div>
              </div>

              <div class="control-group">
                <div class="controls row-fluid">
                  <div class="form-group ">
                {{ Form::password('password', array('class' => 'span12', 'placeholder' => 'Password'))}}
                </div>
                </div>
              </div>
              <div class="control-group">
                <div class="controls row-fluid">
                  <div class="form-group ">
                {{ Form::password('password_confirmation', array('class' => 'span12', 'placeholder' => 'Confirm Password')) }}                     
                </div>
                </div>
              </div>

            </div>
            <div class="module-foot">
              <div class="control-group">
              
                <div class="controls clearfix">
                {{ Form::submit('Reset', array('class' => 'btn btn-primary pull-right' ))}}
                {{ Form::close()}}
                    
                </div>
              </div>
            </div>
        
        </div>
      </div>
    </div>
  </div><!--/.wrapper-->
       @stop