<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite([
        'resources/css/1.3.0/css/line-awesome.css', 
        'resources/sass/app.scss', 
        'resources/css/app.css', 
        'resources/js/app.js'
    ])
</head>
<body>
    <input type="checkbox" name="" id="sidebar-toggle">

    <div class="sidebar">
        <div class="sidebar-brand mb-5">
            <div class="h4">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-salad" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 11h16a1 1 0 0 1 1 1v.5c0 1.5 -2.517 5.573 -4 6.5v1a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-1c-1.687 -1.054 -4 -5 -4 -6.5v-.5a1 1 0 0 1 1 -1z"></path>
                    <path d="M18.5 11c.351 -1.017 .426 -2.236 .5 -3.714v-1.286h-2.256c-2.83 0 -4.616 .804 -5.64 2.076"></path>
                    <path d="M5.255 11.008a12.204 12.204 0 0 1 -.255 -2.008v-1h1.755c.98 0 1.801 .124 2.479 .35"></path>
                    <path d="M8 8l1 -4l4 2.5"></path>
                    <path d="M13 11v-.5a2.5 2.5 0 1 0 -5 0v.5"></path>
                </svg>
                <span class="h5 poppins">Frozen Food</span>
            </div>
            <div class="bg-white bg-opacity-10 p-1 text-light rounded-5">
                <span class="small poppins fw-normal">Warehouse Management System</span>
            </div>
        </div>

        <div class="sidebar-main">

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="/home" class="">
                            <i class="las la-chart-pie"></i>
                            Dashboard
                        </a>
                    </li>
                </ul>
                <b class="menu-head px-2">Inventory</b>
                <ul>
                    <li>
                        <a href="/suppliers" class="">
                            <i class="las la-user-friends"></i>
                            Supplier
                        </a>
                    </li>
                    <li>
                        <a href="/barangs" class="">
                            <i class="las la-box"></i>
                            Barang
                        </a>
                    </li>
                    <li>
                        <a href="/kategoris" class="">
                            <i class="las la-tags"></i>
                            Kategori
                        </a>
                    </li>
                </ul>
                <b class="menu-head px-2">Transaction</b>
                <ul>
                    <li>
                        <a href="/home" class="">
                            <i class="las la-user-friends"></i>
                            Barang Masuk
                        </a>
                    </li>
                    <li>
                        <a href="/home" class="">
                            <i class="las la-box"></i>
                            Barang Keluar
                        </a>
                    </li>
                </ul>
                <b class="menu-head px-2">Report</b>
                <ul>
                    <li>
                        <a href="/home" class="">
                            <i class="las la-user-friends"></i>
                            Report Barang
                        </a>
                    </li>
                    <li>
                        <a href="/home" class="">
                            <i class="las la-box"></i>
                            Report Supplier
                        </a>
                    </li>
                    <li>
                        <a href="/home" class="">
                            <i class="las la-box"></i>
                            Report Transaction
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="menu-toggle">
                <label for="sidebar-toggle">
                    <i class="las la-bars"></i>
                </label>
            </div>

            <div class="header-icons pe-2">
            <!-- <li class="nav-item dropdown"> -->
                @guest
                @else
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endguest
            <!-- </li> -->
            </div>
        </header>

        <main>
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <label for="sidebar-toggle" class="body-label"></label>



</body>
</html>
