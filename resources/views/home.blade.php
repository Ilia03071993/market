@extends("layouts.main")

@section('main')
    <h2 class="title">Поиск</h2>
    <form action="" class="mb-5">
        <div class="mb-3 row">
            <label for="q" class="col-sm-2 col-form-label">Что будем искать?</label>
            <div>
                <input type="text" class="form-control" placeholder="антипригарная сковородка.." id="q">
            </div>

            <button type="button" class="btn btn-success col-sm-2">Поиск</button>
        </div>
    </form>
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img src="https://main-cdn.goods.ru/big1/hlr-system/1508973/100000008310b0.jpg" alt="...">
            <div class="card-body">
                <h5 class="card-title">Сковородка</h5>
                <p class="card-text">Мытье в посудомоечной машине</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Категория: Сковородки</li>
                <li class="list-group-item">Цена: <b>30$</b></li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Открыть</a>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://main-cdn.goods.ru/big1/hlr-system/1508973/100000008310b0.jpg" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Сковородка</h5>
                    <p class="card-text">Мытье в посудомоечной машине</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Сковородки</li>
                    <li class="list-group-item">Цена: <b>30$</b></li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Открыть</a>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="https://main-cdn.goods.ru/big1/hlr-system/1508973/100000008310b0.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Сковородка</h5>
                        <p class="card-text">Мытье в посудомоечной машине</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Категория: Сковородки</li>
                        <li class="list-group-item">Цена: <b>30$</b></li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Открыть</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
