@extends('layouts.app')
@section('content')
<div class="container bg-light">
    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <p class="pizza-id-title">COMPLETE THE PIZZA</p>
           
            <p>Ordred By: {{$pizzas->name}}</p>
            <p>Pizza Type: {{$pizzas->type}}</p>
            <p>Pizza Base: {{$pizzas->base}}</p>
            <p>Extra Toppings:</p>
            <div class="toppings">
                <ul>
                @foreach($pizzas->toppings as $topping)
                <li class="text-decoration-none" >{{$topping}}</li>
                @endforeach
                </ul>
            </div>

            <!-- form handling data deletion in a Database -->
            <!-- <form action="/pizzalist/{{$pizzas->id}}" method="POST"> -->
            <form action="{{ route('pizzafiles.destroy',$pizzas->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary">Complete Order</button>
            </form>

            <div class="text-center back">
                 <!-- <a href="/pizzalist">Back to pizzas</a> -->
                 <a href="{{route('pizzafiles.pizzalist') }}">Back to pizzas</a>
            </div>
        </div>
    </div>
</div>
@endsection