<!--doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href= "{{asset('/css/layout.css')}}">
        <link href="{{ asset('/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
        <script src="{{ asset('/bootstrap/dist/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/jquery/dist/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/jquery/dist/jquery.slim.min.js') }}"></script>
        
        
        <script src="script.js"></script>

        <title>Hitch</title>
    </head-->
@extends('app')
@section('content')
    <body>

        <div id='cssmenu'>
            <ul>
                <li class='active'><a href='#'><span>Home</span></a></li>
                <!--<li><a href='#'><span>Products</span></a></li> -->
                <li><a href='#'><span>Company</span></a></li>
                <li class='last'><a href='#'><span>Contact</span></a></li>
            </ul>
        </div>
        
        <div id='VOwner'style="padding-top: 120px; padding-right:90px; padding-left:10px;"> 
            <ul>
            <a href="registerOwner"> <img src="{{asset('/images/VOwner.png')}}" class="img-responsive" height= "350" width= "700"></a>
            </ul>
            <ul></ul>
            <ul>
                <img src="{{asset('/images/H2ride.png')}}" class="img-responsive" height= "350" width= "1000">
            </ul>
        </div>
        <div>
            This part is tricky
        </div>
        <div>
            This on is super
        </div>

    <!--/body-->
    <!--html-->
@stop
