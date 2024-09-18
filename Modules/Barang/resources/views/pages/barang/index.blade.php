@extends('layouts.user')

@section('body')
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg">
        <h1 class="text-2xl font-semibold">Barang</h1>
        <div class="justify-end flex gap-4">
            @auth('admin')
                <a href="{{ route('admin.barang.create') }}"
                    class="bg-[#136921] py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white">Tambah<box-icon
                        name='plus'></box-icon></a>
            @endauth
            @auth('pegawai')
                <a href="{{ route('pegawai.barang-in.create') }}"
                    class="bg-[#136921] py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white">Masukkan<box-icon
                        name='plus'></box-icon></a>
                <a href="{{ route('pegawai.barang-out.create') }}"
                    class="bg-[#136921] py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white">Keluarkan<box-icon
                        name='plus'></box-icon></a>
            @endauth
        </div>
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
            @forelse ($barangs as $index => $barang)
                <tr class="text-center odd:bg-[#4f4f4f] odd:text-[#FFF7FC]">
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $barang->id }} <span
                            class="text-[#848484] md:hidden">(ID)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $barang->nama }} <span
                            class="text-[#848484] md:hidden">(Nama Barang)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $barang->kategori->nama }} <span
                            class="text-[#848484] md:hidden">(Kategori)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $barang->jumlah }} <span
                            class="text-[#848484] md:hidden">(Barang di kategori)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">
                        {{ \Carbon\Carbon::parse($barang->created_at)->format('d-m-Y') }} <span
                            class="text-[#848484] md:hidden">(Tanggal Masuk)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left capitalize">{{ $barang->status }} <span
                            class="text-[#848484] md:hidden">(Status)</span></td>
                    <td class="p-4 flex items-center justify-center gap-2">
                        <a href="{{ route(Auth::guard('admin')->check() ? 'admin.barang.show' : 'pegawai.barang.show', $barang->nama) }}"
                            class="bg-[#136921] py-2 px-4 text-white rounded-sm">Lihat</a>
                        @auth('admin')
                            <a href="{{ route('admin.barang.edit', $barang->nama) }}"
                                class="bg-[#136921] py-2 px-4 text-white rounded-sm">Edit</a>
                            <form action="{{ route('admin.barang.destroy', $barang->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="bg-[#921c15] py-2 px-4 text-white rounded-sm">Hapus</button>
                            </form>
                        @endauth
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
    @if ($barangs->hasPages())
        <x-pagination :paginator="$barangs" route="{{ route('admin.barang.list') }}" />
    @endif
@endsection
