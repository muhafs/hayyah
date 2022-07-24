<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <!-- Costum CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/styles/style.css') }}">
</head>

<body>
    <!-- NavBar Starts -->
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="frontend/images/logo-navy.png" alt="logo brand">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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

                    <!-- Mobile Button -->
                    <form class="form-inline d-sm-block d-md-none">
                        <button class="btn btn-login my-2 my-sm-0">Masuk</button>
                    </form>

                    <!-- Desktop Button -->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0">Masuk</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!-- NavBar Ends -->

    @yield('content')

    <!-- Footer Starts -->
    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row jusify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <h5>Features</h5>

                            <ul class="list-unstyled">
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Social Media Kit</a></li>
                                <li><a href="#">Affiliate</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <h5>Account</h5>

                            <ul class="list-unstyled">
                                <li><a href="#">Refund</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Rewards</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <h5>Company</h5>

                            <ul class="list-unstyled">
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Media</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <h5>Contact</h5>

                            <ul class="list-unstyled">
                                <li><a href="#">Jakarta Selatan</a></li>
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">0800 - 1111 - 2222</a></li>
                                <li><a href="#">support@hayyah.id</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center align-items-center border-top pt-4">
                <div class="col-auto text-black fw-light">2022 Copyright Hayyah - All Right Reserved - Made in Batu
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->

    <!-- JQuery JS -->
    <script src="{{ asset('frontend/libraries/jquery/jquery-3.6.0.min.js') }}"></script>
    <!-- Popper JS -->
    <!-- <script src="https://unpkg.com/@popperjs/core@2"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <!-- Retina JS -->
    <script src="{{ asset('frontend/libraries/retina/retina.min.js') }}"></script>
</body>

</html>
