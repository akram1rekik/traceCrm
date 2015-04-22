@extends('template')
@section('style')
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="urbanic/css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="urbanic/js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="urbanic/css/templatemo_style.css"  rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
  @stop 

  @section('nav')

<div class=" navbar-form ">
                
                    <ul class="nav pull-right">

                        

                        <li>{{ link_to('register/form','Sing Up ',array('class' => ''))}} </li>

                        <li>{{ link_to('auth/login','Sing In ',array('class' => ''))}}</li>
                        <li> {{link_to('contact/form', 'Contact',array('class' => '')) }}</li>
                    </ul>
                    </div>
                
  @stop 
    @section('contenu')
        <div>
            <!-- Carousel -->
            <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="1"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" >
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption" style="background-color: rgba(0, 0, 255, 0.1);">
                                <h1>WELCOME TO TraceCRM</h1>

                                <p>Affordable and easy to use customer relationship management powered by</p>
                                <p><a class="btn btn-lg btn-orange" href="http://www.tracenova.com" role="button" style="margin: 20px;">TraceNova</a> 
                                	<!-- <a class="btn btn-lg btn-orange" href="#" role="button">Free Download</a></p> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="container">
                                <div class="carousel-caption" style="background-color: rgba(0, 0, 255, 0.1);">
                                    <div class="col-sm-6 col-md-6">
                                    	<h1>AWESOME</h1>
                                        <p>TraceCRM is among the most productive and effective technologies 
                            and that it meets the highest standards of design, ease-of-use and conformance with appropriate accounting standards.</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                    	<h1>EFFICIENCY</h1>
                                        <p>You want the control to manage customer relations the way you want? There’s no doubt about it -TraceCRM is the most customisable software on the market.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                        <div class="item">
                            <div class="container">
                                <div class="carousel-caption" style="background-color: rgba(0, 0, 255, 0.1);">
                                	<h1>RESPONSIVE LAYOUT</h1>
                                    <p>TracCRM is a Resposive Showcase Presentation For,
                            Customer Relationship Management Dashboard (Web)</p>
                                    <p><a class="btn btn-lg btn-orange" href="#" role="button">Read More</a></p>
                                </div>
                            </div>
                        </div>
                </div>
                <a class="" href="#templatemo-carousel" data-slide="prev"></a>
                <a class="" href="#templatemo-carousel" data-slide="next"></a>
            </div><!-- /#templatemo-carousel -->
        </div>

        <div class="templatemo-welcome" id="templatemo-welcome">
        <div class="wrapper">
            <div class="container">
                <div class="templatemo-slogan text-center">
                <br>
                    <span class="txt_darkgrey">Welcome to </span><span class="txt_orange">TraceCRM</span>
                    <p class="txt_slogan"><i>CRM to TraceCRM : the integration of new technologies into customer relationship management.</i></p>
                </div>	
            </div>
        </div>
        </div>

        <div class="templatemo-tweets">
            <div class="container">
                <div class="row" style="margin-top:20px;">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-1">
                                <img src="urbanic/images/quote.png" alt="icon" />
                        </div>
                        <div class="col-md-7 tweet_txt" >
                                <span>

    Customer relationship management (CRM) is a combination of people, processes and technology that seeks to understand a company's customers.
     It is an integrated approach to managing relationships by focusing on customer retention and relationship development.</span>
                                <br/>
                                <span class="twitter_user"> Injazz J. Chen</span>
                        </div>
                        <div class="col-md-2">
                        </div>
                 </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="urbanic/images/leaf.png" alt="icon" />
                                <span class="templatemo-service-item-header">AWESOME CRM</span>
                            </div>
                            <p>The Awesome Applications award signifies that TraceCRM is among the most productive and effective technologies 
                            and that it meets the highest standards of design, ease-of-use and conformance with appropriate accounting standards.</p>
                            
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item" >
                            <div>
                                <img src="urbanic/images/mobile.png" alt="icon"/>
                                <span class="templatemo-service-item-header">FULLY RESPONSIVE</span>
                            </div>
							<p><a rel="nofollow" href="#">TracCRM</a> is responsive mobile website powered by TracNova. 
                            Resposive Showcase Presentation For,
                            Customer Relationship Management Dashboard (Web) </p>

                            <br class="clearfix"/>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="urbanic/images/battery.png" alt="icon"/>
                                <span class="templatemo-service-item-header">HIGH EFFICIENCY</span>
                            </div>
                            <p>You want the control to manage customer relations the way you want? There’s no doubt about it -TraceCRM is the most customisable software on the market. 
                            With TracCRM your business has total efficiency guaranteed..</p>
                            <br class="clearfix"/>
                        </div>
                        <br class="clearfix"/>
                    </div>
                </div>
            </div>
        </div>





        

        
@stop

@section('scripts')
        <script src="urbanic/js/jquery.min.js" type="text/javascript"></script>
        <script src="urbanic/js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="urbanic/js/stickUp.min.js"  type="text/javascript"></script>
        <script src="urbanic/js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="urbanic/js/templatemo_script.js"  type="text/javascript"></script>
		<!-- templatemo 395 urbanic -->
  @stop  