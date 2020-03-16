@extends('app')
@section('title')
    بصائر
@endsection


@section('content')
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
  
      <!--Search Bar-->
      <div class="theboxforlib">
          <form action="search" method="GET">
            <div class="row">
              <div class="col-sm-12 float-right">
                <input class="input-search" name="title" type="text" placeholder="ابحث عن كتاب">
              </div>
              <div class="col-sm-12 float-left">
                <button class="button-search-lib"><i class="fas fa-search"></i>
              </div>
            </div>
          </form>
      </div>

      <!--books seaction-->
    <div class="break"></div>
    <div class="row showbooks">

        @foreach ($books as $book)
            <div class="col-sm-12 col-md-6 col-lg-3">
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
            </div>
        @endforeach
    </div>
      
@endsection