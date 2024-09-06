
@extends('layouts.user')

@section('body')
    <div class="flex items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <a href="/staff"
            class="py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon
                name='chevron-left' type="solid"></box-icon></a>
        <h1 class="text-2xl font-semibold">Edit Pegawai </h1>
    </div>
    <div class="flex text-white justify-between items-center bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <form action="" class="w-full flex flex-col gap-4">
            <label>
                <p class="text-lg">NIP </p>
                <input type="text" name="" placeholder="123456"
                    class="text-black border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]">
            </label>
            <label>
                <p class="text-lg">Nama </p>
                <input type="text" name="" placeholder="M. Gilang Chandrawinata"
                    class="text-black border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]">
            </label>
            <label>
                <p class="text-lg">Kategori</p>
                <select class="text-black border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" name="">
                    <option value="">Pilih Kategori</option>
                </select>
            </label>
            <label>
                <p class="text-lg">Jenis Kelamin</p>
                <select class="text-black border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" name="">
                    <option value="">Laki-Laki</option>
                    <option value="">Perempuan</option>
                </select>
            </label>
            <label>
                <p class="text-lg">Alamat</p>
                <textarea name="" placeholder="Jln. Makmur Dusun 6 Kenanga"
                    class="text-black resize-none border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" cols="60"
                    rows="5"></textarea>
            </label>
            <label>
                <p class="text-lg">Jabatan</p>
                <select class="text-black border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" name="">
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
                    class="text-black border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]">
            </label>
            <input type="button" value="Kirim" class="px-4 py-2 bg-[#1d8b30] cursor-pointer hover:bg-[#136921] duration-150 rounded-[5px] mt-4">
        </form>
    </div>
@endsection
