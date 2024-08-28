@extends('layouts.user')

@section('body')
    <h1 class="text-2xl font-semibold">Edit Barang</h1>
    <form action="">
        <div class="p-0 md:p-4 flex flex-col gap-4">
            <label class="flex flex-col w-full">
                <span>Nama Barang</span>
                <input type="text" name="nama_pegawai" placeholder="Processor" class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <label class="flex flex-col w-full">
                <span>Jumlah Barang</span>
                <input type="text" name="jumlah_barang" placeholder="15" class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black " readonly>
            </label>
            <label class="flex flex-col w-full">
                <span>Tanggal Masuk</span>
                <input type="date"  name="jumlah_barang" class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
        </div>
        <div class="flex justify-end py-4">
            <a ref="#"
                class="bg-[#4f4f4f] cursor-pointer px-4 py-2 flex items-center justify-center gap-2 rounded-[5px] font-medium text-white"><box-icon
                    name='save' type='solid' color='#ffffff'></box-icon>Simpan</a>
        </div>
    </form>
@endsection
