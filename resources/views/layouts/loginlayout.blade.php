<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>بصائر</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    body{
        background: #0d47a1;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #3f2b96, #0d47a1);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #3f2b96, #0d47a1); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        color: #0d47a1 !important;
    }

    .container > div{
        margin-top:10%;
    }

    .card{
        border-radius: 0rem;
        box-shadow: 0px 0px 2px 0px black;
    }

    .logo{
        font-size: 5rem;
        color: #0d47a1;
    }

    .btn-primary{
        background-color: #0d47a1;
    }
</style>
<body>

    @yield('content')
    
</body>
</html>