<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Game Quiz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset ('assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        @yield('css')
    </head>

    <body class="authentication-bg authentication-bg-pattern">

        @yield('main-contain')
        <!-- end page -->


        <footer class="footer footer-alt">
            2019 &copy; Game Quiz theme by <a href="" class="text-muted">Nhom</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset ('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset ('assets/js/app.min.js')}}"></script>
        
    </body>
</html>