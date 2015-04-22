<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraceCRM</title> 

{{ HTML::style('edmin/bootstrap/css/bootstrap.min.css') }}
{{ HTML::style('edmin/bootstrap/css/bootstrap-responsive.min.css') }}
{{ HTML::style('edmin/css/theme.css') }}
{{ HTML::style('edmin/images/icons/css/font-awesome.css') }}
{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600') }}
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> -->
@yield('style')
  </head>
  <body>
<div class="navbar navbar-fixed-top" >
    <div class="navbar-inner">
      <div class="container"  style="height:64px; margin-top:8px;margin-bottom:8px;">           

<!-- <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <i class="icon-reorder shaded"></i>
        </a> -->
@if(Auth::check())

        {{ link_to('command/liste', 'TraceCRM', array('class' => 'brand')) }}
      
    @else
    
      {{ link_to('/', 'TraceCRM', array('class' => 'brand')) }}
      
    @endif
          

      @yield('nav')
      </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->

    @yield('contenu')

      <div class="footer">
    <div class="container">
       

      <b class="copyright">&copy; 2015 TraceCRM - Tracenova.com </b> All rights reserved.
    </div>
  </div>
  <script src="edmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="edmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="edmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  @yield('scripts')
  </body>
</html>