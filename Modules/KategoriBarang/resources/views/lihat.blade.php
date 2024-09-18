@extends('layouts.user')

@section('body')
    <div class="flex items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <a href="{{ route(Auth::guard('admin')->check() ? 'admin.kategori.list' : 'pegawai.kategori.list') }}"
            class="py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon name='chevron-left'
                type="solid"></box-icon></a>
        <h1 class="text-2xl font-semibold">Lihat Kategori</h1>
    </div>
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <section class="w-full flex flex-col gap-4">
            <label class="flex flex-col w-full">
                <span>Nama Kategori</span>
                <input type="text" value="{{ $kategori->nama }}" readonly
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
        </section>
    </div>
@endsection
