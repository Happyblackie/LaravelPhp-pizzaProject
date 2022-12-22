@extends('layouts.app')
@section('content')
<div class="container bg-light">
    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <p class="pizza-list">Pizza List Ordered</p>
            @foreach($pizzas as $pizza)
           <!--  <p>{{$pizza->name}} -- {{$pizza->type}} -- {{$pizza->base}}</p> -->
            <p> <a href="/pizzaid/{{$pizza->id}}">{{$pizza->name}}</a></p>
            @endforeach
        </div>
    </div>
</div>
@endsection