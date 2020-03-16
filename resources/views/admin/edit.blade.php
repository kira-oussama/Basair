@extends('admin.app')

@section('title')
    Edit
@endsection

@section('content')

    <div class="container addbookcont">
        <form action="{{route('update_book' , ['id' => $book->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label>حمل صورة الكتاب</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="image" required>
                <label class="custom-file-label" for="customFile"></label>
            </div><br><br>

            <div class="form-group">
              <label for="title">عنوان الكتاب</label>
              <input type="text" class="form-control" placeholder="ادخل عنوان الكتاب" id="title" name="title" value="{{$book->title}}">
            </div>
            
            <div class="form-group">
              <label for="title">السعر</label>
              <input type="number" class="form-control" placeholder="ادخل سعر الكتاب" id="title" name="price" value="{{$book->price}}">
            </div>

            <div class="form-group">
              <label for="title">اسم الكاتب</label>
              <input type="text" class="form-control" placeholder="ادخل اسم الكاتب" id="title" name="author" value="{{$book->author}}">
            </div>

            <div class="row">

                <div class="form-group col-md-6">
                    <label for="sel1">دار النشر</label>
                    <select class="form-control" id="sel1" name="pub_house">
                      <option value="جرير">جرير</option>
                      <option value="دار الخيال">دار الخيال</option>
                    </select>
                </div>
    
                <div class="form-group col-md-6">
                    <label for="sel2">الموضوع</label>
                    <select class="form-control" id="sel2" name="subject">
                      <option value="روايات">روايات</option>
                      <option value="كتب دينية">كتب دينية</option>
                    </select>
                </div>

            </div>

            <div class="form-group">
                <label for="desc">قصة الكتاب</label>
                <textarea class="form-control" rows="5" id="desc" name="description" >{{$book->description}}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">تعديل</button>
        </form>

    </div>

@endsection