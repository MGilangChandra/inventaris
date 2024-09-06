@extends('layouts.user')

@section('body')
    <div class="flex items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <a href="/item" class="py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon
                name='chevron-left' type="solid"></box-icon></a>
        <h1 class="text-2xl font-semibold">Tambah Barang</h1>
    </div>
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <form action="" class="w-full flex flex-col gap-4">
            <label class="flex flex-col w-full">
                <span>Nama Barang</span>
                <select name="kategori"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
                    <option value="">Pilih Barang</option>
                </select>
            </label>
            <label class="flex flex-col w-full">
                <span>Jumlah Barang</span>
                <input type="number" name="jumlah_barang" inputmode="numeric"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <label class="flex flex-col w-full">
                <span>Kategori</span>
                <select name="kategori"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
                    <option value="">Pilih Kategori</option>
                </select>
            </label>
            <input type="button" value="Kirim"
                class="px-4 py-2 bg-[#1d8b30] cursor-pointer hover:bg-[#136921] duration-150 rounded-[5px] mt-4">
        </form>
    </div>
@endsection
