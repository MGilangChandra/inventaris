@extends('layouts.user')

@section('body')
    <div class="flex items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg">
        <a href="{{ route('admin.barang.list') }}"
            class="py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon name='chevron-left'
                type="solid"></box-icon></a>
        <h1 class="text-2xl font-semibold">Tambah Barang</h1>
    </div>
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-3">
        <form action="{{ route('admin.barang.store') }}" method="post" class="w-full flex flex-col gap-4">
            @csrf
            @method('POST')
            <label class="flex flex-col w-full">
                <span>Nama Barang</span>
                <input type="text" name="nama"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <label class="flex flex-col w-full">
                <span>Kategori</span>
                <select name="kategori_id"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
                    <option value="" selected disabled>Pilih Kategori</option>
                    @foreach ($kategoris as $k)
                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                    @endforeach
                </select>
            </label>
            <div x-data="imagePreview()" class="w-full">
                <label class="flex flex-col w-full">
                    <span>Gambar Barang</span>
                    <input type="file" name="gambar" multiple
                        class="border-2 bg-white border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black"
                        @change="showPreview($event)">
                </label>

                <!-- Preview Gambar -->
                <div class="mt-4 flex gap-2 flex-wrap">
                    <template x-for="(image, index) in images" :key="index">
                        <div class="relative">
                            <img :src="image" class="w-32 h-32 object-cover rounded" alt="Preview Gambar">
                        </div>
                    </template>
                </div>
            </div>
            <label class="flex flex-col w-full">
                <span>Deskripsi Barang</span>
                <textarea type="number" name="deskripsi"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black"></textarea>
            </label>
            <label class="flex flex-col w-full">
                <span>Jumlah Barang</span>
                <input type="number" name="jumlah" inputmode="numeric"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <input type="submit" value="Kirim"
                class="px-4 py-2 bg-[#1d8b30] cursor-pointer hover:bg-[#136921] duration-150 rounded-[5px] mt-4">
        </form>
    </div>
@endsection

@section('script')
    <script>
        function imagePreview() {
            return {
                images: [],
                showPreview(event) {
                    this.images = []; // Reset images array
                    const files = event.target.files;

                    Array.from(files).forEach(file => {
                        let reader = new FileReader();
                        reader.onload = e => {
                            this.images.push(e.target.result);
                        };
                        reader.readAsDataURL(file);
                    });
                }
            };
        }
    </script>
@endsection