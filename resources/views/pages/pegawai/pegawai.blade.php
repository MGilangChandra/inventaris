@extends('layouts.user')

@section('body')
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg">
        <h1 class="text-2xl font-semibold">Pegawai</h1>
        <a href="/staff/add" class="bg-[#136921] py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon name='plus'></box-icon></a>
    </div>
    <div class="w-full overflow-auto my-3 bg-[#414141] p-2 rounded-lg scrollbar-none border-2 " >
        <table class="border-2 w-full border-collapse bg-white">
            <tr class="bg-[#1d1d1d] text-white">
                <th class="p-2 max-[768px]:hidden">NIP</th>
                <th class="p-2 max-[768px]:hidden">Nama</th>
                <th class="p-2 max-[768px]:hidden">Jenis Kelamin</th>
                <th class="p-2 max-[768px]:hidden">Alamat</th>
                <th class="p-2 max-[768px]:hidden">Jabatan</th>
                <th class="p-2 max-[768px]:hidden">No Telp</th>
                <th class="p-2 max-[768px]:hidden">Aksi</th>
            </tr>
            <tr class="text-center odd:bg-[#4f4f4f] odd:text-[#FFF7FC]">
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >123456 <span class="text-[#848484] md:hidden">(NIP)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >M. Gilang Chandrawinata <span class="text-[#848484] md:hidden">(Nama)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >Laki-laki <span class="text-[#848484] md:hidden">(Laki-laki)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >Jln. Makmur Dusun 6 Kenanga <span class="text-[#848484] md:hidden">(Alamat)</span>
                </td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >Manajer <span class="text-[#848484] md:hidden">(Jabatan)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >085762647933 <span class="text-[#848484] md:hidden">(No Telp)</span></td>
                <td class="p-4 flex items-center justify-center gap-2">
                    <a href="/staff/edit" class="bg-[#136921] py-2 px-4 text-white rounded-sm">Edit</a>
                    <a href="" class="bg-[#921c15] py-2 px-4 text-white rounded-sm">Hapus</a>
                </td>
            </tr>
            <tr class="text-center odd:bg-[#4f4f4f] odd:text-[#FFF7FC]">
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >123456 <span class="text-[#848484] md:hidden">(NIP)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >M. Gilang Chandrawinata <span class="text-[#848484] md:hidden">(Nama)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >Laki-laki <span class="text-[#848484] md:hidden">(Laki-laki)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >Jln. Makmur Dusun 6 Kenanga <span class="text-[#848484] md:hidden">(Alamat)</span>
                </td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >Manajer <span class="text-[#848484] md:hidden">(Jabatan)</span></td>
                <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left" >085762647933 <span class="text-[#848484] md:hidden">(No Telp)</span></td>
                <td class="p-4 flex items-center justify-center gap-2">
                    <a href="/staff/edit" class="bg-[#136921] py-2 px-4 text-white rounded-sm">Edit</a>
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
