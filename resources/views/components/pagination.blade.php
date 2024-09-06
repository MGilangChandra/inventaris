@props(['paginator', 'route'])

<div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg">
    <div class="flex items-center">
        {{-- Tombol ke halaman pertama dan halaman sebelumnya --}}
        @if ($paginator->onFirstPage())
            {{-- Tidak ada tombol jika di halaman pertama --}}
        @else
            <a href="{{ $paginator->url(1) }}" class="fill-white flex items-center">
                <box-icon type='solid' name='chevrons-left'></box-icon>
            </a>
            <a href="{{ $paginator->previousPageUrl() }}" class="fill-white flex items-center">
                <box-icon type='solid' name='chevron-left'></box-icon>
            </a>
        @endif
    </div>

    <div class="flex items-center text-xl gap-2">
        {{-- Nomor Halaman --}}
        @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
            <a href="{{ $url }}" class="flex items-center {{ $page == $paginator->currentPage() ? 'font-bold' : '' }}">
                {{ $page }}
            </a>
        @endforeach
    </div>

    <div class="flex items-center">
        {{-- Tombol ke halaman berikutnya dan terakhir --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="fill-white flex items-center">
                <box-icon type='solid' name='chevron-right'></box-icon>
            </a>
            <a href="{{ $paginator->url($paginator->lastPage()) }}" class="fill-white flex items-center">
                <box-icon type='solid' name='chevrons-right'></box-icon>
            </a>
        @endif
    </div>
</div>
