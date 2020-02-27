<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Semnasti</title>
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Animate CSS -->
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">

    <!-- Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,400,800&display=swap" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    @yield('content')

    <!-- ========= JS Section Start ========= -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/popper.min.js') }}"></script> --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('js/particles.min.js') }}"></script> --}}
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    @yield('js')
    <!-- ========= JS Section End ========= -->
</body>

</html>
