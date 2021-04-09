@extends("layouts.main")

@section('main')
        <h2 class="title">Мои объявления</h2>
        <ul class="list-group">
            @foreach($sales as $sale)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$sale->title}}

                    <form action="/public-sale/{{$sale->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-{{ (int)$sale->public === 1 ? "danger" : "success"}}">{{ (int)$sale->public === 1 ? "Снять с публикации" : "Опубликовать" }}</button>
                    </form>
                </li>
            @endforeach
        </ul>
@endsection
