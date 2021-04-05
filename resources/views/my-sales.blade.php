@extends("layouts.main")

@section('main')
<div class="container">
    <h2 class="title">Мои объявления</h2>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Сковородка
            <button class="btn btn-danger">Снять с публикации</button>
        </li><li class="list-group-item d-flex justify-content-between align-items-center">
            Микроволновка
            <button class="btn btn-danger">Опубликовать</button>
        </li>
    </ul>


</div>





@endsection
