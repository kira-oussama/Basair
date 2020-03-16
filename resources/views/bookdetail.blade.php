@extends('app')
@section('title')
    بصائر
@endsection

@section('content')

<div class="container">
    <div class="row datailcontainer">
        <img class="soloimage col-sm-12 col-md-4" src="{{asset($book->image)}}" alt="">
        <h3 class="solotext col-sm-12 col-md-8">{{$book->description}}</h3>
    </div>
</div>
    
@endsection