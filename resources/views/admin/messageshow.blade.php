@extends('admin.app')

@section('title')
    Message
@endsection

@section('content')

<div class="container" style="text-align:center;padding:10%">
    
    <div class="row">
        <h3 class="col-md-12 ">الاسم الكامل </h3>
        <h3 class="col-md-12 msg">{{$message->fullname}}</h3>
    </div>

    <div class="row">
        <h3 class="col-md-12 ">الايميل</h3>
        <h3 class="col-md-12 msg">{{$message->email}}</h3>
    </div>

    <div class="row">
        <h3 class="col-md-12">الرسالة</h3>
        <h3 class="col-md-12 msg">{{$message->msg}}</h3>
    </div>


@endsection