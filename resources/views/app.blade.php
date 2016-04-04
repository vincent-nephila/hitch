<!DOCUMENT HTML>
<html>
    <head>
        <link href="{{ asset('/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
        
        <script src="{{ asset('/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/jquery/dist/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/jquery/dist/jquery.slim.min.js') }}"></script>
        
        
    </head>
    <body>
        <div class="container_fluid">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="container_fluid">
                <p class="text-muted"> AMA University All Rights Reserved.</p>
            </div>
        </footer>
    </body>

</html>