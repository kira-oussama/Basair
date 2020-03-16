@extends('admin.app')

@section('title')
    Messages
@endsection

@section('content')

<div class="container">
    <table class="table" style="width:75%">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">الايميل</th>
            <th scope="col">الاسم الكامل</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($contacts as $contact)
                <tr>
                    <td>
                        <form action="{{route('delmsg',[$contact->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">احذف</button>
                        </form>
                    </td>
                    <td><a href="showmsg/{{$contact->id}}" class="btn btn-primary">اقرء</a></td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->fullname}}</td>
                </tr>
            @endforeach
          
        </tbody>
      </table>
</div>

@endsection