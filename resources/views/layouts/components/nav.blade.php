<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container" >
        <a class="navbar-brand" href="#">
            <img src="https://image.freepik.com/free-vector/happy-shop-logo-template_57516-57.jpg" alt="Logo" style="width: 30%">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="justify-content: space-between"
             id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}">Поиск</a>
                </li>
                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('create-sale')}}">Создать объявление</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('my-sales')}}">Мои объявления</a>
                    </li>
                @endauth
                @guest()
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register')}}">Регистрация</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Авторизация</a>
                    </li>
                @endguest
            </ul>
            @auth()
            <div class="profile" style="margin-bottom:35px;">
                <h5>{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Выход
                </a>
            </div>
            @endauth
        </nav>
    </div>
</nav>
