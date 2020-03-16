@extends('admin.app')

@section('title')
    Search
@endsection

@section('content')

    <div class="container addbookcont">
       <form action="{{route('profile_update',[$user])}}" method="POST">
           @csrf
           @method('PUT')
            <div class="form-group">
                <label for="username"> اسم المستخدم </label>
                <input type="text" class="form-control" id="username" name="username" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="email"> الايميل </label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="password"> كلمة السر </label>
                <input type="password" class="form-control pass" onkeydown="verify_pass()" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation"> تأكيد كلمة السر </label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button class="btn btn-primary" >تحديث</button>
       </form>

    </div>

@endsection