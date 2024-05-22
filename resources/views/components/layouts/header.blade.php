<nav class="navbar navbar-expand-sm border-bottom">
    <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo.png')}}" height="60px" width="220px"
            alt="logo"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <x-anchor_tag>
                    Home
                </x-anchor_tag>
            </li>
            <li class="nav-item">
                <x-anchor_tag>
                    Posts
                </x-anchor_tag>
            </li>
            <li class="nav-item">
                <x-anchor_tag>
                    About us
                </x-anchor_tag>
            </li>
            <li class="nav-item">
                <x-anchor_tag>
                    Contact us
                </x-anchor_tag>
            </li>
        </ul>
        <div class="d-flex my-2 my-lg-0">
            @auth
            <a class="btn btn-outline-warning my-2 my-sm-0" href="{{route('home')}}" type="submit">
                Dashboard
            </a>
            @else
            <a class="btn btn-outline-info m-2 my-sm-0" href="{{route('login')}}" type="submit">
                Login
            </a>
            <a class="btn btn-outline-info m-2 my-sm-0" href="{{route('register')}}" type="submit">
                Register
            </a>
            @endauth
        </div>
    </div>
</nav>