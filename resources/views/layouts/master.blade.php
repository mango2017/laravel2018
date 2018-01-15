<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
        sidebar
            this is master 1
        @show

        <div class="container">
            container
            @yield('content')
        </div>
    </body>
</html>
