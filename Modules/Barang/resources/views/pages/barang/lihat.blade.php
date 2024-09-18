@extends('layouts.user')

@section('body')
    <div class="flex items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg ">
        <a href="{{ route(Auth::guard('admin')->check() ? 'admin.barang.list' : 'pegawai.barang.list') }}"
            class="py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon
                readonly name='chevron-left' type="solid"></box-icon></a>
        <h1 class="text-2xl font-semibold">Lihat Barang </h1>
    </div>
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-3">
        <section class="w-full flex flex-col gap-4">
            <label class="flex flex-col w-full">
                <span>Nama Barang</span>
                <input type="text" readonly value="{{ $barang->nama }}" class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <label class="flex flex-col w-full">
                <span>Kategori</span>
                <select disabled
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
                    <option selected readonly>Pilih Kategori</option>
                    @foreach ($kategoris as $k)
                        <option value="{{ $k->id }}" {{ $barang->kategori_id == $k->id ? 'selected' : '' }}>{{ $k->nama }}</option>
                    @endforeach
                </select>
            </label>
            <label class="flex flex-col w-full">
                <span>Jumlah Barang</span>
                <input type="number" inputmode="numeric" readonly value="{{ $barang->jumlah }}" class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <label class="flex flex-col w-full">
                <span>Deskripsi</span>
                <textarea type="text" readonly class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black ">{{ $barang->deskripsi }}</textarea>
            </label>
        </section>
    </div>
@endsection
