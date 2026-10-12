<!doctype html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>{{config('app.name', 'LaravelApp')}}</title>
        <script src="{{asset('../resources/js/bootstrapJs/bootstrap.js')}}" type="text/javascript"></script>
        <link href="{{asset('../resources/css/bootstrapCss/bootstrap.css')}}" rel="stylesheet" type="text/css">
    </head>

    <body style="padding: 1%; background-size: contain; background-image: linear-gradient(rgba(255, 255, 255, 0.65), rgba(255, 255, 255, 0.65)), url('../resources/imgs/drunk.gif');">
        @include('layouts.navigation')
        <main>
            @yield('content')
        </main>
        <footer>
            {{config('app.name', 'LaravelApp')}} v{{config('app.version')}} (PHP v{{PHP_VERSION}})
        </footer>
    </body>
</html>
