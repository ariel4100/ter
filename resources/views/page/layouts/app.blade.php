<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TER</title>

    <link rel="icon" href="{{ asset($logos[0]['image']) }}">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
    <script>
        document.__API_URL = '{{ url('/') }}';
    </script>

    <style>
        .ter-color{
            color: #C01939 !important;
        }
        .ter-fondo{
            background-color: #C01939 !important;
        }
        .btn{
            box-shadow: unset !important;
        }

        .activo{
            border-bottom: 2px solid #D33538;
            color: #D33538 !important;
        }

        .active {
            /*background-color: white;*/
            /*color: #D33538 !important;*/
            /*border-bottom: 2px solid #D33538;*/
        }
        a{
            color: unset !important;
        }
        @media only screen and (max-width: 600px) {
            .fixed-top-sm {
                position: absolute;
                background-color: rgb(51, 51, 51);
            }
            .carrousel-sm{
                margin-top: 10rem
            }
            .carousel-caption {
                bottom: 0px !important;
                left: 15% !important;
                right: 15% !important;
            }

            .carousel-caption h2{
                font-size: 10px !important;
            }

            .carousel-caption .imagen{
                padding: 1rem !important;
            }
        }
    </style>
    @stack('style')
</head>
<body style="font-family: 'Open Sans', sans-serif; color: #858585;">
<div id="app">
    @include('page.partials.header')
    <main class="" style="padding-top: 112px;">
        @yield('content')
    </main>
    @include('page.partials.footer')
</div>

<!-- Optional JavaScript -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
{{--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}
<script>
    // $(".mas").removeClass("waves-effect waves-light");
    new WOW().init();
</script>
    @stack('script')
</body>
</html>