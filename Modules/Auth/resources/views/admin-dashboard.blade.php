@extends('layouts.user')

@section('body')
    <div class="flex flex-wrap gap-2 text-white">
        <a href="{{ route('admin.pegawai.list') }}" class="bg-[#1D1D1D] flex-grow h-80 flex overflow-hidden relative md:aspect-auto aspect-square flex-col cursor-pointer hover:scale-[1.025] duration-150 shadow-md shadow-white rounded-lg">
            <div class="flex justify-around w-full flex-grow items-center">
                <div class=" size-40">
                    <img src="{{ asset('assets/contacts.png') }}" class="size-full opacity-25 aspect-square"
                        alt="Data Pegawai">
                </div>
                <h1 class="text-9xl">1</h1>
            </div>
            <p class="py-4 px-10 text-3xl">Data Pegawai</p>
        </a>
        <a href="{{ route('admin.barang.list') }}" class="bg-[#1D1D1D] flex-grow h-80 flex overflow-hidden relative md:aspect-auto aspect-square flex-col cursor-pointer hover:scale-[1.025] duration-150 shadow-md shadow-white rounded-lg">
            <div class="flex justify-around w-full flex-grow items-center">
                <div class=" size-40">
                    <img src="{{ asset('assets/box.png') }}" class="size-full opacity-25 aspect-square" alt="Data Barang">
                </div>
                <h1 class="text-9xl">1</h1>
            </div>
            <p class="py-4 px-10 text-3xl">Data Barang</p>
        </a>
        <a href="{{ route('admin.kategori.list') }}" class="bg-[#1D1D1D] flex-grow h-80 flex overflow-hidden relative md:aspect-auto aspect-square flex-col cursor-pointer hover:scale-[1.025] duration-150 shadow-md shadow-white rounded-lg">
            <div class="flex justify-around w-full flex-grow items-center">
                <div class=" size-40">
                    <img src="{{ asset('assets/barang-masuk.png') }}" class="size-full opacity-25 aspect-square"
                        alt="Barang Masuk">
                </div>
                <h1 class="text-9xl">1</h1>
            </div>
            <p class="py-4 px-10 text-3xl">Data Kategori</p>
        </a>
    </div>
    <div class="flex flex-wrap gap-2 mt-4"></div>
@endsection
