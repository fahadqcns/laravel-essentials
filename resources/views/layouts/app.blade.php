<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
            this is the master sidebar at bottom.

        <div class="container">
            @yield('content')
        </div>

        <div class="alert alert-danger">
            <?php echo date("Y m, D H:i");?>
        </div>

    </body>
</html>