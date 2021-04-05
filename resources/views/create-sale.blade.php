@extends("layouts.main")

@section('main')
<div class="container">
    <h2 class="title">Создать объявление</h2>
    <form action="" class="mb-3">
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="email" class="form-control" id="title" placeholder="new phone">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea id="description" rows="3" class="form-control">пользовался всего</textarea>
        </div>
        <div class="mb-3">
            <label for="product-image" class="form-label">Изображение товара</label>
            <input type="file" class="form-control" id="product-image">
        </div>
        <select aria-label="Default select example" class="form-select mb-3">
            <option selected>Выберите категорию</option>
            <option value="1">Техника</option>
            <option value="2">Одежда</option>
            <option value="3">Игрушки</option>
        </select>
        <div class="mb-3">
            <label for="call" class="form-label">Номер телефона</label>
            <input type="email" class="form-control" id="call" placeholder="+79160976967">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Цена</label>
            <input type="number" class="form-control" id="price" value="0">
            <button class="btn btn-primary">Опубликовать</button>
        </div>
    </form>

</div>





@endsection
