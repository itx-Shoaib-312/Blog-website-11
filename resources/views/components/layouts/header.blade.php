<nav class="navbar navbar-expand-sm border-bottom">
    <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo.png')}}" height="60px" width="220px"
            alt="logo"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link ms-sm-2 mx-lg-3" href="" aria-current="page">Home <span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link ms-sm-2 mx-lg-3" href="" aria-current="page">Categories <span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link ms-sm-2 mx-lg-3" href="" aria-current="page">About us <span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link ms-sm-2 mx-lg-3" href="" aria-current="page">Contact us <span
                        class="visually-hidden">(current)</span></a>
            </li>
        </ul>
        <div class="d-flex my-2 my-lg-0">
            @auth
            <a class="btn btn-outline-warning my-2 my-sm-0" type="submit">
                Dashboard
            </a>
            @else
            <a class="btn btn-outline-info m-2 my-sm-0" type="submit">
                Login
            </a>
            <a class="btn btn-outline-info m-2 my-sm-0" type="submit">
                Register
            </a>
            @endauth
        </div>
    </div>
</nav>