<nav class="navbar navbar-expand-sm border-bottom">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo.png') }}" height="60px" width="220px"
            alt="logo"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link ms-sm-2 mx-lg-3" href="{{route('index')}}" aria-current="page">Home <span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link ms-sm-2 mx-lg-3" href="#" aria-current="page">Posts <span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link ms-sm-2 mx-lg-3" href="#" aria-current="page">About us <span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link ms-sm-2 mx-lg-3" href="#" aria-current="page">Contact us <span
                        class="visually-hidden">(current)</span></a>
            </li>
        </ul>
        <div class=" me-4 my-lg-0">
            @guest
            @if (Route::has('login'))
            <a class="btn btn-outline-info me-3" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
            @if (Route::has('register'))
            <a class="btn btn-outline-info  " href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @else
            <a id="navbarDropdown" class="btn btn-outline-warning me-4 dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

            @endguest
        </div>
    </div>
</nav>