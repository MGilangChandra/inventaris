@extends('layouts.user')

@section('body')
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg">
        <h1 class="text-2xl font-semibold">Pegawai</h1>
        <a href="{{ route('admin.pegawai.create') }}"
            class="bg-[#136921] py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon
                name='plus'></box-icon></a>
    </div>
    <div class="w-full overflow-auto my-3 bg-[#414141] p-2 rounded-lg scrollbar-none border-2 ">
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
            @forelse ($pegawais as $index => $pegawai)
                <tr class="text-center odd:bg-[#4f4f4f] odd:text-[#FFF7FC]">
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $index + 1 }} <span
                            class="text-[#848484] md:hidden">(NIP)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $pegawai->nama }} <span
                            class="text-[#848484] md:hidden">(Nama)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $pegawai->jenis_kelamin }} <span
                            class="text-[#848484] md:hidden">(Jenis Kelamin)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $pegawai->alamat }} <span
                            class="text-[#848484] md:hidden">(Alamat)</span>
                    </td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $pegawai->jabatan }} <span
                            class="text-[#848484] md:hidden">(Jabatan)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $pegawai->no_hp }} <span
                            class="text-[#848484] md:hidden">(No Telp)</span></td>
                    <td class="p-4 flex items-center justify-center gap-2">
                        <a href="{{ route('admin.pegawai.edit', $pegawai->username) }}"
                            class="bg-[#696813] py-2 px-4 rounded-sm flex items-center"><box-icon class="size-6" name='edit-alt' type='solid' color='#ffffff' ></box-icon></a>
                        <form action="{{ route('admin.pegawai.delete', $pegawai->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="bg-[#921c15] py-2 px-4 flex items-center fill-white rounded-sm"><box-icon class="size-6" type='solid' name='eraser'></box-icon></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr class="text-center odd:bg-[#4f4f4f] odd:text-[#FFF7FC]">
                    <td colspan="7" class="p-3 md:p-14 text-xl max-[768px]:block max-[768px]:text-left">Tidak ada data
                    </td>
                </tr>
            @endforelse
        </table>
    </div>

    {{-- Pagination --}}
    @if ($pegawais->hasPages())
        <x-pagination :paginator="$pegawais" route="{{ route('admin.pegawai.list') }}" />
    @endif
@endsection
