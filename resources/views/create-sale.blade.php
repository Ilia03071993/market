@extends("layouts.main")

@section('main')
<div class="container">
    <h2 class="title">Создать объявление</h2>
    <form action="{{ route('store-sale')  }}" method="post" class="mb-3" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ old('title') }}" id="title" placeholder="new phone">
            @error('title')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea id="description" name="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
            @error('description')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="product-image" class="form-label">Изображение товара</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="product-image">
            @error('image')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
        <select aria-label="Default select example" name="category" class="form-select mb-3" name="category">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="call" class="form-label">Номер телефона</label>
            <input type="text" value="{{$phone}}" name="phone" class="form-control  @error('phone') is-invalid @enderror" id="call" placeholder="+79160976967">
            @error('phone')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Цена</label>
            <input type="number" name="price" class="form-control @error('price')is-invalid @enderror" id="price" value="0">
            @error('price')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Опубликовать</button>
    </form>

</div>





@endsection
