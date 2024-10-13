@extends('admin.admin_page')

@section('content')
    <section class="h-screen w-full">
        <div class="mb-4">
            <h1 class="text-black text-2xl font-bold">Produk</h1>
        </div>

        <div class="bg-white w-96 flex my-2 rounded-lg">
            <a href="{{ route('produk') }}"
                class="h-full w-1/3 py-3 rounded-lg px-2 {{ Route::is('produk') ? 'bg-base-200' : 'bg-white' }}">Produk
                Saya</a>
            <a href="{{ route('addProduk') }}"
                class="py-3 w-1/3  rounded-lg px-2 {{ Route::is('addProduk') ? 'bg-base-200' : 'bg-white' }}">Tambah
                Produk</a>
            <a href=""
                class="py-3 w-1/3  rounded-lg px-2 {{ Route::is('Pelanggan') ? 'bg-base-200' : 'bg-white' }}">Pelanggan</a>
        </div>

        @yield('content-items')

    </section>
@endsection
