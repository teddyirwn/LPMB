@extends('admin.items.index')

@section('content-items')
    <div class="bg-white w-full p-5 rounded-lg  text-slate-600">
        <h1 class=" text-3xl font-bold font-suse mb-3">Add Produk</h1>
        <div class="grid grid-cols-2 gap-3 ">
            <div class="join join-vertical">
                <label for="" class=" font-bold ">Name Product</label>
                <input type="text" name="nama" placeholder="Type here"
                    class="input input-bordered bg-white w-full max-w-xs" />
            </div>
            <div class="join join-vertical">
                <label for="" class=" font-bold ">Description</label>
                <textarea name="deskripsi" id="" class="input input-bordered bg-white w-full max-w-xs"></textarea>
            </div>
            <div class="join join-vertical">
                <label for="" class=" font-bold ">Price</label>
                <input type="text" name="harga" placeholder="Type here"
                    class="input input-bordered bg-white w-full max-w-xs" />
            </div>
            <div class="join join-vertical">
                <label for="" class=" font-bold ">Stok</label>
                <input type="text" name="stok" placeholder="Type here"
                    class="input input-bordered bg-white w-full max-w-xs" />
            </div>
        </div>
        <div class="join join-vertical">
            <label for="" class=" font-bold ">Image</label>
            <input type="file" name="foto" class="input input-bordered bg-white w-full max-w-xs" />
        </div>
        {{-- <div class="mt-3 join join-vertical w-full space-y-6 ">
            <label for="" class="font-bold">Image</label>
            <div class="flex  gap-5 ">
                <div class="cursor-pointer relative border-dotted p-2  border-4 w-24 h-24  rounded-lg ">
                    <img src="{{ asset('assets/image/icons8-input-100 (1).png') }}" class="mx-auto translate-y-2"
                        width="50" alt="">
                    <input type="file" name="input-image" id=""
                        class="w-24 h-24 absolute bg-black top-0 cursor-pointer opacity-0">
                </div>
                <div class="cursor-pointer relative border-dotted p-2  border-4 w-24 h-24  rounded-lg">
                    <img src="{{ asset('assets/image/icons8-input-100 (1).png') }}" class="mx-auto translate-y-2"
                        width="50" alt="">
                    <input type="file" name="input-image" id=""
                        class="w-24 h-24 absolute bg-black top-0 cursor-pointer opacity-0">
                </div>
                <div class="cursor-pointer relative border-dotted p-2  border-4 w-24 h-24  rounded-lg">
                    <img src="{{ asset('assets/image/icons8-input-100 (1).png') }}" class="mx-auto translate-y-2"
                        width="50" alt="">
                    <input type="file" name="input-image" id=""
                        class="w-24 h-24 absolute bg-black top-0 cursor-pointer opacity-0">
                </div>
                <div class="cursor-pointer relative  border-dotted p-2  border-4 w-24 h-24  rounded-lg">
                    <img src="{{ asset('assets/image/icons8-input-100 (1).png') }}" class="mx-auto translate-y-2"
                        width="50" alt="">
                    <input type="file" name="input-image" id=""
                        class="w-24 h-24 absolute bg-black top-0 cursor-pointer opacity-0">
                </div>

            </div>


        </div> --}}
    </div>
@endsection
