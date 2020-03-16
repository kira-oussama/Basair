@extends('app')
@section('title')
    بصائر
@endsection

@section('content')
    <!--Landing page-->
    <div id="landing-sect" class="d-none d-lg-block">

        <div class="full-img-bg"></div>
      </div>
  
      <!--in landing page-->
      <section class="d-none d-lg-block">
        <h4 class="slogan"><span class="logo">بصائر</span>أفضل موقع بيع كتب في الجزائر</h4>
        <div class="thebox">
          <form action="/search" method="GET">
            <div class="row">
              <div class="col-sm-2">
                <button class="button-search"><i class="fas fa-search"></i></button>
              </div>
              <div class="col-sm-10">
                <input class="input-search" type="text" style="" placeholder="ابحث عن كتاب" name="title">
              </div>
            </div>
          </form>
        </div>
      </section>
  
      <section class="d-lg-none">
        <div class="theboxmobile">
          <form action="">
            <div class="row">
              <div class="col-sm-12">
                <input class="input-search" type="text" placeholder="ابحث عن كتاب">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-12">
                <button class="button-search-mobile"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </section>

      <!--side nav-->
    <div class="sidenav d-none d-lg-block">
        <h3>حسب الموضوع</h3>
        <ul>
          <li><a href="/search?subject=روايات">روايات</a></li>
          <li><a href="/search?subject=كتب دينية">كتب دينية</a></li>
        </ul>
  
        <h3>حسب دار النشر</h3>
        <ul>
          <li><a href="/search?pub_house=جرير">جرير</a></li>
          <li><a href="/search?pub_house=دار الخيال">دار الخيال</a></li>
        </ul>
  
      </div>

      <!--best sellings-->
    <div class="row wrapbs d-none d-lg-block">
        <div class="col-sm-3 bestselling">
          <h5>أكثر الكتب مبيعا</h5>
        </div>
      </div>
      <!--titleformobile-->
      <div class="d-lg-none mobiletitle" >
        <h5 class="center">  أكثر الكتب مبيعا</h5>
      </div>
      <!--books list-->
    <div class="break d-none d-lg-block"></div>
    <div class="slider d-none d-lg-block">

        @foreach ($bestbooks as $book)
            <div class="card">
                <img class="card-img-top" src="{{asset($book->image)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title}}</h5>
                  <p class="card-text">
                    <h6>السعر : {{$book->price}} دج</h6>
                    <h6>الكاتب : {{$book->author}}</h6></p>
                  <a href="details/{{$book->id}}" class="btn btn-primary">المزيد</a>
                </div>
            </div>
        @endforeach

    </div>

    <!--books list mobile-->
    <div class="mobile-cards d-lg-none ">
        <br>
        @foreach ($bestbooks as $book)
            <div class="card">
                <img class="card-img-top" src="{{asset($book->image)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title}}</h5>
                  <p class="card-text">
                    <h6>السعر : {{$book->price}} دج</h6>
                    <h6>الكاتب : {{$book->author}}</h6></p>
                  <a href="details/{{$book->id}}" class="btn btn-primary">المزيد</a>
                </div>
            </div><br>
        @endforeach
    </div>

    <!--suggested books-->
    <div class="row wrapbs d-none d-lg-block">
        <div class="col-sm-3 bestselling">
          <h5>كتب جديدة</h5>
        </div>
    </div>
    <!--titleformobile-->
    <div class="d-lg-none mobiletitle" >
        <h5 class="center">كتب جديدة</h5>
    </div>

    <!--books list-->
    <div class="break d-none d-lg-block"></div>
    <div class="slider d-none d-lg-block">
        @foreach ($newbooks as $book)
            <div class="card">
                <img class="card-img-top" src="{{asset($book->image)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title}}</h5>
                  <p class="card-text">
                    <h6>السعر : {{$book->price}} دج</h6>
                    <h6>الكاتب : {{$book->author}}</h6></p>
                  <a href="details/{{$book->id}}" class="btn btn-primary">المزيد</a>
                </div>
          </div>
        @endforeach
    </div>

    <!--books list mobile-->
    <div class="mobile-cards d-lg-none ">
        @foreach ($newbooks as $book)
        <br>
        <div class="card">
            <img class="card-img-top" src="{{$book->image}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$book->title}}</h5>
              <p class="card-text">
                <h6>السعر : {{$book->price}} دج</h6>
                <h6>الكاتب : {{$book->author}}  </h6></p>
              <a href="details/{{$book->id}}" class="btn btn-primary">المزيد</a>
            </div>
        </div><br>
        @endforeach

    </div>

    <footer>
        <div class="white bottom z-depth-2">
          <div class="container blue-text text-darken-4">
            © 2020 Copyright Text
          </div>
        </div>
    </footer>


@endsection