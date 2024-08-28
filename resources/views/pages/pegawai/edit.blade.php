@extends('layouts.user')

@section('body')
    <h1 class="text-2xl font-semibold">Edit Pegawai</h1>
    <form action="">
        <div class="p-0 md:p-4 flex flex-col gap-4">
            <label>
                <p class="text-lg">NIP </p>
                <input type="text" name="" placeholder="123456"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]">
            </label>
            <label>
                <p class="text-lg">Nama </p>
                <input type="text" name="" placeholder="M. Gilang Chandrawinata"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]">
            </label>
            <label>
                <p class="text-lg">Jenis Kelamin</p>
                <select class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" name="">
                    <option value="">Laki-Laki</option>
                    <option value="">Perempuan</option>
                </select>
            </label>
            <label>
                <p class="text-lg">Alamat</p>
                <textarea name="" placeholder="Jln. Makmur Dusun 6 Kenanga"
                    class="resize-none border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" cols="60"
                    rows="5"></textarea>
            </label>
            <label>
                <p class="text-lg">Jabatan</p>
                <select class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" name="">
                    <option value="">Komisaris</option>
                    <option value="">Direktur Utama</option>
                    <option value="">Direktur Keuangan</option>
                    <option value="">Direktur Pemasaran</option>
                    <option value="">Direktur Direktur Sumber Daya Manusia</option>
                    <option value="">Supervisor</option>
                    <option value="">Manajer</option>
                </select>
            </label>
            <label>
                <p class="text-lg">Jabatan</p>
                <input type="text" name="" placeholder="Manajer"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]">
            </label>
        </div>
        <div class="flex justify-end py-4">
            <a ref="#"
                class="bg-[#4f4f4f] cursor-pointer px-4 py-2 flex items-center justify-center gap-2 rounded-[5px] font-medium text-white"><box-icon
                    name='save' type='solid' color='#ffffff'></box-icon>Simpan</a>
        </div>
    </form>
@endsection
