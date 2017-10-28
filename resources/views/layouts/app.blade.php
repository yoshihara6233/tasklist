<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tasklist</title>
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    </head>

    <body>
        @include('commons.error_tasks')
        
        @yield('content')
        
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>