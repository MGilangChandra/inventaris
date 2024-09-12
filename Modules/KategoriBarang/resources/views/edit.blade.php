@extends('layouts.user')

@section('body')
    <div class="flex items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <a href="{{ route('admin.kategori.list') }}"
            class="py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon name='chevron-left'
                type="solid"></box-icon></a>
        <h1 class="text-2xl font-semibold">Edit Kategori</h1>
    </div>
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <form action="{{ route('admin.kategori.update', $kategori->id) }}" method="post" class="w-full flex flex-col gap-4">
            @method('PUT')
            @csrf
            <label class="flex flex-col w-full">
                <span>Nama Kategori</span>
                <input type="text" name="nama" value="{{ $kategori->nama }}"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <input type="submit" value="Kirim"
                class="px-4 py-2 bg-[#1d8b30] cursor-pointer hover:bg-[#136921] duration-150 rounded-[5px] mt-4">
        </form>
    </div>
@endsection
