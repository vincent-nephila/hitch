<!DOCUMENT HTML>
<html>
    <head>
        <link href="{{ asset('/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        
        <script src="{{ asset('/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/jquery/dist/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/jquery/dist/jquery.slim.min.js') }}"></script>
        <script src="{{ asset('/jquery/sizzle/dist/jquery.min.js') }}"></script>
        
    </head>
    <body>
        @yield('content')
    </body>
</html>