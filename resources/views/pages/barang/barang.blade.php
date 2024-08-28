@extends('layouts.user')

@section('body')
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg">
        <h1 class="text-2xl font-semibold">Barang</h1>
        <a href="/item/add"
            class="bg-[#136921] py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon
                name='plus'></box-icon></a>
    </div>
    <div class="w-full overflow-auto my-3 bg-[#414141] p-2 md:p-4 rounded-lg scrollbar-none">
        <table class="border-2 w-full border-collapse bg-white">
            <tr class="bg-[#1d1d1d] text-white">
                <th class="p-2 max-[768px]:hidden">ID</th>
                <th class="p-2 max-[768px]:hidden">Nama Barang</th>
                <th class="p-2 max-[768px]:hidden">Jumlah barang</th>
                <th class="p-2 max-[768px]:hidden">Tanggal Masuk</th>
                <th class="p-2 max-[768px]:hidden">Tanggal Keluar</th>
                <th class="p-2 max-[768px]:hidden">Aksi</th>
            </tr>
            <tr class="text-center odd:bg-[#4f4f4f] odd:text-[#FFF7FC]">
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">1</td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">Processor</td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">15</td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">2022-01-01</td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">2024-01-31</td>
                <td class="p-4 flex items-center justify-center gap-2">
                    <a href="/item/edit" class="bg-[#136921] py-2 px-4 text-white rounded-sm">Edit</a>
                    <a href="" class="bg-[#921c15] py-2 px-4 text-white rounded-sm">Hapus</a>
                </td>
            </tr>
        </table>
    </div>
    
    </div>
@endsection
