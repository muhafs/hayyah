<!-- NavBar Starts -->
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ url('frontend/images/logo-navy.png') }}" alt="logo brand">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Paket Travel</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Link</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link">Testimonial</a>
                    </li>
                </ul>

                @guest
                    <!-- Mobile Button -->
                    <form class="form-inline d-sm-block d-md-none">
                        <button class="btn btn-login my-2 my-sm-0" type="button"
                            onclick="event.preventDefault(); location.href='{{ url('login') }}';">Masuk</button>
                    </form>

                    <!-- Desktop Button -->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0" type="button"
                            onclick="event.preventDefault(); location.href='{{ url('login') }}';">Masuk</button>
                    </form>
                @endguest

                @auth
                    <!-- Mobile Button -->
                    <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-login my-2 my-sm-0" type="submit">Keluar</button>
                    </form>

                    <!-- Desktop Button -->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0" type="submit">Keluar</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
</div>
<!-- NavBar Ends -->
