<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smart Goals</title>
    <link rel="shortcut icon" href="nameko (2).ico" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        
        <!--chart.js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
        <!--lightbox.js-->
        <link href="{{ asset ('css/lightbox.css')}}" rel="stylesheet">
        <script src="{{ asset ('js/lightbox.js')}}" type="text/javascript"></script>
        
    </head>
    <body style="background-color: #fff9f4">
        @include('commons.navbar')

        @yield('cover')

        <div class="container" style="padding-top: 70px;">
            @include('commons.error_messages')
            @yield('content')
        </div>

        @include('commons.footer')
                          <!--base.js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="{{ asset ('js/base.js')}}"></script>
    </body>
</html>