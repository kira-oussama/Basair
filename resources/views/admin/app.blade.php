<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="{{ asset('css/adminstyle.css') }}" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <?php $user = auth()->user() ?>

    <nav class="navbar bg-light">
        <a class="navbar-brand" href="{{route('land_page')}}">بصائر</a>
        <div class="admin">
          <h3 class="username">{{$user->name}}</h3>
        </div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ml-auto">
          <a class="nav-link" href="{{route('land_page')}}"> الرئيسية <i class="fa fa-home" aria-hidden="true"></i> </a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="{{route('add_book')}}"> اضافة كتاب  <i class="fa fa-plus" aria-hidden="true"></i> </a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="{{route('search_book')}}"> البحث عن كتاب <i class="fa fa-search" aria-hidden="true"></i> </a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="{{route('messages')}}"> الرسائل <i class="fa fa-comment" aria-hidden="true"></i> </a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="{{route('profile_edit',[$user])}}"> تعديل الحساب <i class="fa fa-cog" aria-hidden="true"></i> </a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="{{url('admin/logout')}}"> تسجيل الخروج <i class="fas fa-sign-out" aria-hidden="true"></i> </a>
          </li>
        </ul>
      
    </nav>

    @yield('content')

    <script src="asset('js/jquery.min.js')"></script>
    <script>
      function verify_pass() { 
        alert('hey');
       }
    </script>
</body>
</html>