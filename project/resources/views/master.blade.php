<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('includes.header')
    </head>
    <body>
        @include('includes.navigation')
        <div class="container theme-showcase" role="main">
            <div class="page-header">

            </div>
            <div class="jumbotron">
                @yield('content')
            </div>
            @include('includes.footer')
        </div>
    </body>
</html>