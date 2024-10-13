<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="text-slate-900 ">
    

    <navbar class="navbar fixed bg-white border-b-2 py-4">
        <div class="flex-1">
            <a href="/" class="btn btn-ghost text-4xl text-sky-900">LPMB</a>
        </div>
        <div class="flex justify-between  lg:w-full gap-2">
            <div class="space-x-3 font-bold text-slate-500 font-suse">
                <a href="">Produk</a>
                <a href="">Tentang kami</a>
            </div>




            <div class="font-bold text-slate-500  flex lg:items-center gap-4">

                <input type="text" placeholder="Search"
                    class="input input-bordered bg-slate-100 rounded-3xl w-24 md:w-auto" />

                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="font-semibold  p-3 ">Log
                            in</a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-semibold text-white bg-blue-600 p-3 rounded-3xl">Sign
                            up</a>
                    @endif
                @else
                    <div class="dropdown dropdown-end pr-4">
                        <button>{{ Auth::user()->userName }}</button>
                        <ul tabindex="0"
                            class="menu  menu-sm dropdown-content bg-white text-slate-900    rounded-box z-[1] mt-3 w-52 p-2 shadow">
                            <li>
                                <a class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest


            </div>


        </div>
    </navbar>

    <div class="main">

        @yield('content')
    </div>



    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>
