
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href= "{{asset('/css/layout.css')}}">
        <link href="{{ asset('/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/jquery/dist/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/jquery/dist/jquery.slim.min.js') }}"></script>
        
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        
        
        <script src="script.js"></script>

        <title>Hitch</title>
@extends('app')
@section('content')

    <body>
        
       

        <div id='cssmenu'>
            
            <nav role="navigation" class="navbar navbar-default">
        
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> 
                
               <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                        <li class='active'><a href='#'style="background-color: #f96e5b;"><span>Home</span></a></li>
                        <li><a href='#'><span>Company</span></a></li>
                        <li><a href='#'><span>Contact</span></a></li>
                
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href ="login" style="background-color: #f96e5b;" >Log In</a></li>
                        </ul>
                </div>         
            </nav>
    </div>
  
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>  
                <div class="row">
                    <div class="col-md-7">
                    <img src="{{asset('/images/hitch_logo.png')}}" class="logo">
                     </div>
                    <div class="col-md-4" style= " background-color: rgba(0,0,0,0.5); border-radius: 30px;">
                    <h1 style="color: #ffffff; font-family: Open Sans; " > SIGN UP</h1>
                    <a href="registerOwner"> <img src="{{asset('/images/VOwner.png')}}" class="plate img-responsive"></a>
                    <img src="{{asset('/images/H2ride.png')}}" class="plate img-responsive ">
                    </div>
               
                </div> 
            
                </div>
   
    </body>
    <!--html-->
@stop
