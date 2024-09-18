@extends('layouts.user')

@section('body')
    <div class="flex items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <a href="{{ route('pegawai.barang.list') }}" class="py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon
                name='chevron-left' type="solid"></box-icon></a>
        <h1 class="text-2xl font-semibold">Keluarkan Barang</h1>
    </div>
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <form action="{{ route('pegawai.barang-out.store') }}" method="POST" class="w-full flex flex-col gap-4">
            @method('POST')
            @csrf
            <label class="flex flex-col w-full">
                <span>Barang</span>
                <select name="barang_id" type="text"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
                    <option value="" selected disabled>Pilih Barang</option>
                    @foreach ($barangs as $b)
                        <option value="{{ $b->id }}">{{ $b->nama }}</option>
                    @endforeach
                </select>
            </label>
            <label class="flex flex-col w-full">
                <span>Jumlah</span>
                <input name="jumlah" type="numeric"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
                </input>
            </label>
            <input type="submit" value="Kirim"
                class="px-4 py-2 bg-[#1d8b30] cursor-pointer hover:bg-[#136921] duration-150 rounded-[5px] mt-4">
        </form>
    </div>
@endsection
