@extends('layouts.user')

@section('body')
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg">
        <h1 class="text-2xl font-semibold">Barang</h1>
        <a href="/item/add"
            class="bg-[#136921] py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon
                name='plus'></box-icon></a>
    </div>
    <div class="w-full overflow-auto my-3 bg-[#414141] p-2 rounded-lg scrollbar-none">
        <table class="border-2 w-full border-collapse bg-white">
            <tr class="bg-[#1d1d1d] text-white">
                <th class="p-2 max-[768px]:hidden">ID</th>
                <th class="p-2 max-[768px]:hidden">Nama Barang</th>
                <th class="p-2 max-[768px]:hidden">Kategori</th>
                <th class="p-2 max-[768px]:hidden">Jumlah barang</th>
                <th class="p-2 max-[768px]:hidden">Tanggal Masuk</th>
                <th class="p-2 max-[768px]:hidden">Status</th>
                <th class="p-2 max-[768px]:hidden">Aksi</th>
            </tr>
            <tr class="text-center odd:bg-[#4f4f4f] odd:text-[#FFF7FC]">
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">1 <span class="text-[#848484] md:hidden">(ID)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">Processor <span class="text-[#848484] md:hidden">(Nama Barang)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">Teknologi <span class="text-[#848484] md:hidden">(Kategori)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">15 <span class="text-[#848484] md:hidden">(Barang di kategori)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">2022-01-01 <span class="text-[#848484] md:hidden">(Tanggal Masuk)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">Tersedia <span class="text-[#848484] md:hidden">(Status)</span></td>
                <td class="p-4 flex items-center justify-center gap-2">
                    <a href="/item/edit" class="bg-[#136921] py-2 px-4 text-white rounded-sm">Edit</a>
                    <a href="" class="bg-[#921c15] py-2 px-4 text-white rounded-sm">Hapus</a>
                </td>
            </tr>
        </table>
    </div>
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg">
        <div class="flex items-center">
            <a href="" class="fill-white flex items-center"><box-icon type='solid' name='chevrons-left'></box-icon></a>
            <a href="" class="fill-white flex items-center"><box-icon type='solid' name='chevron-left'></box-icon></a>
        </div>
        <div class="flex items-center text-xl gap-2">
            <a href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
            <a href="">5</a>
        </div>
        <div class="flex items-center">
            <a href="" class="fill-white flex items-center"><box-icon type='solid' name='chevron-right'></box-icon></a>
            <a href="" class="fill-white flex items-center"><box-icon type='solid' name='chevrons-right'></box-icon></a>
        </div>
    </div>
@endsection
