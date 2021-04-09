@extends('layouts.main')

@section('main')
    <h2 class="title">{{$sale->title}}</h2>
    <hr>
    <div>
        <img src="{{$sale->image}}" alt="product" width="400">
        <div>
            <p>{{$sale->description}}</p>
            <p><b>Категория:{{\App\Models\Category::find($sale->category_id)->title}}</b></p>
            <h3>Цена: {{$sale->price}}</h3>
            <hr>
            <h5>Контакты:</h5>
            <p><b>Телефон: {{$sale->phone}} | E-mail: {{\App\Models\User::find($sale->user_id)->email}}</b></p>
        </div>
    </div>
@endsection
