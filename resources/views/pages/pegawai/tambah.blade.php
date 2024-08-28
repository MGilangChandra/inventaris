@extends('layouts.user')

@section('body')
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <h1 class="text-2xl font-semibold">Tambah Pegawai</h1>
    </div>
    <div class="flex justify-between items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <form action="" class="w-full flex flex-col gap-4">
            <label class="flex flex-col w-full">
                <span>NIP</span>
                <input type="text" inputmode="numeric" name="nip"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <label class="flex flex-col w-full">
                <span>Nama Pegawai</span>
                <input type="text" name="nama_pegawai"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <label class="flex flex-col w-full">
                <span>Jenis Kelamin</span>
                <select name="jenis_kelamin"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </label>
            <label class="flex flex-col w-full">
                <span>Alamat</span>
                <textarea name="alamat" cols="10" rows="10"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black resize-none"></textarea>
            </label>
            <label class="flex flex-col w-full">
                <span>Jenis Kelamin</span>
                <select name="jabatan"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
                    <option value="">Manajer</option>
                    <option value="">Karyawan</option>
                    <option value="">Direktur</option>
                </select>
            </label>
            <label class="flex flex-col w-full">
                <span>No. Telepon</span>
                <input type="telp" inputmode="numeric" name="nip"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <input type="button" value="Kirim" class="px-4 py-2 bg-[#1d8b30] cursor-pointer hover:bg-[#136921] duration-150 rounded-[5px] mt-4">
        </form>
    </div>
@endsection
