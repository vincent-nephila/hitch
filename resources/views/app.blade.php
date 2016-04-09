<!DOCUMENT HTML>
<html>
    <head>
        <link href="{{ asset('/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
        <link rel="stylesheet" href= "{{asset('/css/layout.css')}}">
        
        
        <script src="{{ asset('/bootstrap/dist/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/jquery/dist/jquery.js') }}"></script>
        <script src="{{ asset('/jquery/dist/jquery.slim.js') }}"></script>
        
        
 
        
  <script src="script.js"></script>
        
    </head>
    <body>
        <div class="container_fluid">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="container_fluid">
                <p class="text-muted"> Copyright 2016, Hitch Developers All Rights Reserved.</p>
            </div>
        </footer>
    </body>

</html>