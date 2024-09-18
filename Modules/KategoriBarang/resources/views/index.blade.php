@extends('layouts.user')

@section('body')
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg">
        <h1 class="text-2xl font-semibold">Kategori</h1>
        @auth('admin')
            <a href="{{ route('admin.kategori.create') }}"
                class="bg-[#136921] py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon
                    name='plus'></box-icon></a>
        @endauth
    </div>
    <div class="w-full overflow-auto my-3 bg-[#414141] p-2 rounded-lg scrollbar-none">
        <table class="border-2 w-full border-collapse bg-white">
            <tr class="bg-[#1d1d1d] text-white">
                <th class="p-2 max-[768px]:hidden">ID</th>
                <th class="p-2 max-[768px]:hidden">Nama Kategori</th>
                <th class="p-2 max-[768px]:hidden">Barang di Kategori</th>
                <th class="p-2 max-[768px]:hidden">Barang Tersedia</th>
                <th class="p-2 max-[768px]:hidden">Aksi</th>
            </tr>
            @forelse ($kategoris as $index => $kategori)
                <tr class="text-center odd:bg-[#4f4f4f] odd:text-[#FFF7FC]">
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $index + 1 }} <span
                            class="text-[#848484] md:hidden">(ID)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $kategori->nama }} <span
                            class="text-[#848484] md:hidden">(Nama Kategori)</span></td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">{{ $kategori->barang->count() ?? 0 }}
                        <span class="text-[#848484] md:hidden">(Barang di Kategori)</span>
                    </td>
                    <td class="p-3 md:p-2 max-[768px]:block max-[768px]:text-left">
                        {{ $kategori->barang->where('status', 'tersedia')->count() ?? 0 }} <span
                            class="text-[#848484] md:hidden">(Barang Tersedia)</span></td>
                    <td class="p-4 flex items-center justify-center gap-2">
                        <a href="{{ route(Auth::guard('admin')->check() ? 'admin.kategori.show' : 'pegawai.kategori.show', $kategori->id) }}"
                            class="bg-[#136921] py-2 px-4 text-white rounded-sm">Lihat</a>
                        @auth('admin')
                            <a href="{{ route('admin.kategori.edit', $kategori->id) }}"
                                class="bg-[#136921] py-2 px-4 text-white rounded-sm">Edit</a>
                            <form action="{{ route('admin.kategori.delete', $kategori->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="bg-[#921c15] py-2 px-4 text-white rounded-sm">Hapus</button>
                            </form>
                        @endauth
                    </td>
                </tr>
            @empty
                <tr class="text-center odd:bg-[#4f4f4f] odd:text-[#FFF7FC]">
                    <td colspan="5" class="p-3 md:p-14 text-xl max-[768px]:block max-[768px]:text-left">Tidak ada data
                    </td>
                </tr>
            @endforelse
        </table>
    </div>
    {{-- Pagination --}}
    @if ($kategoris->hasPages())
        <x-pagination :paginator="$kategoris" route="{{ route('admin.kategori.list') }}" />
    @endif
@endsection
