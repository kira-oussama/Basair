@extends('admin.app')

@section('title')
    Search
@endsection

@section('content')

    <div class="container addbookcont">
       <form action="search" method="GET">
            <div class="form-group">
                <label for="title">ابحث عن كتاب</label>
                <input type="text" class="form-control" placeholder="ادخل عنوان الكتاب" id="title" name="title">
            </div>
            <button class="btn btn-primary" >ابحث</button>
       </form>

        @foreach ($books as $book)
        
            <div class="card col-md-5">
                <img class="card-img-top" src="{{asset($book->image)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><a href="admin/edit/{{$book->id}}">{{$book->title}}</a></h5>
                  <p class="card-text">
                    <h6>السعر : {{$book->price}} دج</h6>
                    <h6>الكاتب : {{$book->author}}</h6>
                    <h6>المبيعات : {{$book->sells}}</h6>
                </p>
                    <div class="row">
                        <form action="{{route('min_sell',['id'=>$book->id])}}" method="POST" class="col-md-6">
                            @csrf
                            @method('put')
                            <button class="btn btn-primary" style="width:100%">-</button>
                        </form>
                        <form action="{{route('add_sell',['id'=>$book->id])}}" method="POST" class="col-md-6">
                            @csrf
                            @method('put')
                            <button class="btn btn-danger" style="width:100%">+</button>
                        </form>
                    </div>
                </div>
                <a href="{{route('update_book',['id'=>$book->id])}}" class="btn btn-primary">التعديل</a><br>
                <form action="{{route('del_book',['id'=>$book->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" style="width:100%">الحذف</button>
                </form>
            </div>
            
        @endforeach

        <div class="pagination">
            {{$books->links()}}
        </div>
    </div>

@endsection