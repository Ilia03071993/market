@extends("layouts.main")

@section('main')
    <h2 class="title">Поиск</h2>
    <form action="{{ route('home') }}" class="mb-5" method="get">
        @csrf
        <div class="mb-3 row">
            <label for="q" class="col-sm-2 col-form-label">Что будем искать?</label>
            <div class="col-sm-8">
                <input type="text" name="q"  class="form-control" placeholder="антипригарная сковородка.." id="q">
            </div>

            <button type="submit" class="btn btn-success col-sm-2">Поиск</button>
        </div>
    </form>
    <div class="row">
        @foreach($sales as $sale)
        <div class="card" style="width: 18rem;">
            <img src="{{$sale->image}}" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$sale->title}}</h5>
                <p class="card-text">{{$sale->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Категория: {{\App\Models\Category::find($sale->category_id)->title}}</li>
                <li class="list-group-item">Цена: <b>{{$sale->price}}</b></li>
            </ul>
            <div class="card-body">
                <a href="/sale/{{$sale->id}}" class="card-link">Открыть</a>
            </div>
        </div>
        @endforeach

        <div class="mt-5">{{$sales->links()}}</div>

    </div>
@endsection
