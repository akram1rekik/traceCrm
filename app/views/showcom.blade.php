@extends('template')
 @section('style')
{{ HTML::style('https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
    {{ HTML::style('https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css') }}

    @stop
@section('nav')
				
					<ul class="nav pull-right">


  		<li>
	  		{{ link_to('auth/logout', 'Deconnexion', array('class' => '')) }}
  		</li>
        <li> {{link_to('contact/form', 'Contact',array('class' => '')) }}</li>
        
  		</ul>
  	
@stop	
@section('contenu')
<div class="wrapper">
            <div class="container">
                <div class="row">
                        <div class="span3">
                        <div class="sidebar">
                        
                           <!-- {{ link_to('auth/logout', 'Commands', array('class' => 'menu-icon icon-folder-open')) }}
                            {{ link_to('auth/logout', 'add', array('class' => 'menu-icon icon-plus')) }}
                            {{ link_to('auth/logout', 'show', array('class' => 'menu-icon icon-eye-open')) }}
                            {{ link_to('auth/logout', 'Deconnexion', array('class' => 'menu-icon icon-remove')) }}
                            {{ link_to('auth/logout', 'Deconnexion', array('class' => 'menu-icon icon-wrench')) }}  -->
                            <ul class="widget widget-menu unstyled">
                                <li ><span  style="height:30px;margin:10px;"class="menu-icon icon-dashboard"></span><b>Commands</b></li>
                                <li>{{ link_to('command/add', 'add', array('class' => '')) }}</li>
                                <li>{{ link_to('command/show', 'show', array('class' => '')) }}</li>
                                
                            </ul>
                            <br>
                                <br> 
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                            
                                        <li ><span  style="height:30px;margin:10px;"class="menu-icon icon-asterisk"></span><b>Profile</b></li>
                                        <li><a href="#"><i class="menu-icon "></i>Your Profile </a></li>
                                        <li><a href="#"><i class="menu-icon "></i>Edit Profile</a></li>
                                        <li><a href="#"><i class="menu-icon icon-signout"></i>Logout</a></li>

                            </ul>
                            <br>
                            <br>

                            <ul class="widget widget-menu unstyled">
                                <li ><span  style="height:30px;margin:10px;"class="menu-icon icon-bullhorn"></span><b>News Feed</b></li>
                                
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
      <div class="span8">
                        <div class="content">
                           @foreach($commands as $command)
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{{ $command->titre }}}</h3>
                </div>
                <div class="panel-body"> 
                    <p>{{{ $command->contenu }}}</p>
                    @if(Auth::check() and Auth::user()->admin)
                        {{ link_to('command/del/' . $command->id, 'delete order', array('class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm(\'Vraiment supprimer cet article ?\')')) }}
                    @endif
                    <em class="pull-right">
                        Ordered by {{{ $command->user->name }}}  {{ $command->created_at->format('d-m-Y') }}
                    </em>
                </div>
            </div>
      @endforeach
                        
                 </div>        
                   </div>         
                
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->              

	
		
@stop
