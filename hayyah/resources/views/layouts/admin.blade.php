<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    {{-- ! Stlye Start --}}
    @include('includes.style')
</head>

<body class="sb-nav-fixed">
    {{-- ! Navbar Start --}}
    @include('includes.navbar')

    <div id="layoutSidenav">
        {{-- ! Sidebar Start --}}
        @include('includes.sidebar')

        <div id="layoutSidenav_content">
            {{-- ! Content Start --}}
            @yield('content')

            {{-- ! Footer Start --}}
            @include('includes.footer')
        </div>
    </div>

    {{-- ! Script Start --}}
    @include('includes.script')
</body>

</html>
