@extends('layouts.user')

@section('body')
<div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg">
    <h1 class="text-2xl font-semibold">Cetak Laporan</h1>
</div>
<div class="w-full overflow-auto my-3 gap-2 text-white scrollbar-none flex flex-wrap">
    <a href="{{ route('laporan.cetak') }}" class="bg-[#1D1D1D] flex-grow h-80 flex overflow-hidden relative md:aspect-auto aspect-square flex-col cursor-pointer hover:scale-[1.025] duration-150 shadow-md shadow-white rounded-lg">
        <div class="flex justify-around w-full flex-grow items-center">
            <div class=" size-40">
                <img src="{{ asset('assets/contacts.png') }}" class="size-full opacity-25 aspect-square"
                    alt="Data Pegawai">
            </div>
            <h1 class="text-9xl">1</h1>
        </div>
        <p class="py-4 px-10 text-3xl">Cetak Pegawai</p>
    </a>
    <a href="{{ route('laporan.cetak') }}" class="bg-[#1D1D1D] flex-grow h-80 flex overflow-hidden relative md:aspect-auto aspect-square flex-col cursor-pointer hover:scale-[1.025] duration-150 shadow-md shadow-white rounded-lg">
        <div class="flex justify-around w-full flex-grow items-center">
            <div class=" size-40">
                <img src="{{ asset('assets/box.png') }}" class="size-full opacity-25 aspect-square" alt="Cetak Barang">
            </div>
            <h1 class="text-9xl">1</h1>
        </div>
        <p class="py-4 px-10 text-3xl">Cetak Barang</p>
    </a>
    <a href="{{ route('laporan.cetak') }}" class="bg-[#1D1D1D] flex-grow h-80 flex overflow-hidden relative md:aspect-auto aspect-square flex-col cursor-pointer hover:scale-[1.025] duration-150 shadow-md shadow-white rounded-lg">
        <div class="flex justify-around w-full flex-grow items-center">
            <div class=" size-40">
                <img src="{{ asset('assets/barang-masuk.png') }}" class="size-full opacity-25 aspect-square"
                    alt="Barang Masuk">
            </div>
            <h1 class="text-9xl">1</h1>
        </div>
        <p class="py-4 px-10 text-3xl">Cetak Kategori</p>
    </a>
</div>
@endsection