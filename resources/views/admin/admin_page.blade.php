<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> @yield('title')
        Admin Panel
    </title>
</head>

<body class="bg-violet-100">
    <div class="flex h-screen ">
        <aside class="w-64 bg-white text-black flex flex-col">
            <div class="flex items-center justify-center h-16 border-b border-gray-300 mb-10 ">
                <h1 class="text-2xl font-semibold">Admin Panel</h1>
            </div>
            <nav>
                <ul>
                    <li><a href=""
                            class=" block px-5  py-3 m-3 rounded-md mb-3 border-gray-300 hover:bg-gray-200 flex items-center space-x-10 p-4 ">
                            {{-- icon start --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 mr-2">
                                <path
                                    d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
                            </svg>
                            {{-- icon end  --}}
                            DASHBOARD</a></li>
                    <li><a href=""
                            class=" block px-5  py-3 m-3 rounded-md mb-3 border-gray-300 hover:bg-gray-200 flex items-center space-x-10 p-4">
                            {{-- icon start --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 mr-2">
                                <path fill-rule="evenodd"
                                    d="M2.25 13.5a8.25 8.25 0 0 1 8.25-8.25.75.75 0 0 1 .75.75v6.75H18a.75.75 0 0 1 .75.75 8.25 8.25 0 0 1-16.5 0Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M12.75 3a.75.75 0 0 1 .75-.75 8.25 8.25 0 0 1 8.25 8.25.75.75 0 0 1-.75.75h-7.5a.75.75 0 0 1-.75-.75V3Z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{-- icon end  --}}
                            Data Barang</a></li>
                    <li><a href=""
                            class=" block px-5  py-3 m-3 rounded-md mb-3 border-gray-300 hover:bg-gray-200 flex items-center space-x-10 p-4">
                            {{-- icon start --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 mr-2">
                                <path
                                    d="M12 1.5a.75.75 0 0 1 .75.75V7.5h-1.5V2.25A.75.75 0 0 1 12 1.5ZM11.25 7.5v5.69l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V7.5h3.75a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-9a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h3.75Z" />
                            </svg>

                            {{-- icon end  --}}
                            Data peminjaman</a></li>

                </ul>
            </nav>
            <div class="mt-auto">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                    class=" px-5 py-3 m-3 rounded-md border-gray-300 hover:bg-gray-200 flex items-center space-x-4">
                    {{-- icon start --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
                        <path fill-rule="evenodd"
                            d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    Data Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </aside>
    </div>

    {{-- <div class="flex h-screen bg-white-200">

        <!-- Sidebar -->
        <aside class="w-64 bg-black-100 text-black">
            <div class="flex items-center justify-center h-16 border-b border-white-700">
                <h1 class="text-2xl font-semibold " >Admin LPMB</h1>
            </div>
            <nav class="mt-6">
                <ul>
                    <li>
                        <a href="home"
                            class="block px-4 py-2 rounded-md mb-2 text-white-300 hover:bg-white-700 hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 rounded-md mb-2 text-white-300 hover:bg-white-700 hover:text-white">Data Peminjaman</a>
                    </li>
                    <li>
                        <a href="#"Reports
                            class="block px-4 py-2 rounded-md mb-2 text-white-300 hover:bg-white-700 hover:text-white">Barang kembali</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 rounded-md mb-2 text-white-300 hover:bg-white-700 hover:text-white">settings</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main content -->

    </div> --}}

</body>
