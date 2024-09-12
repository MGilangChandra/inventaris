@extends('layouts.user')

@section('body')
    <div class="flex items-center text-white bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <a href="{{ route('admin.pegawai.list') }}" class="py-2 px-2 text-white rounded-sm flex items-center justify-center fill-white"><box-icon
                name='chevron-left' type="solid"></box-icon></a>
        <h1 class="text-2xl font-semibold">Edit Pegawai </h1>
    </div>
    <div class="flex text-white justify-between items-center bg-[#414141] p-2 md:p-4 rounded-lg my-4">
        <form action="{{ route('admin.pegawai.update', $pegawai->id) }}" method="post"
            class="w-full flex flex-col gap-4">
            @method('PUT')
            @csrf
            <label class="flex flex-col w-full">
                <span>Nama Pegawai</span>
                <input type="text" value="{{ $pegawai->nama }}" name="nama"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <label class="flex flex-col w-full">
                <span>Username Pegawai</span>
                <input type="text" value="{{ $pegawai->username }}" name="username"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <label class="flex flex-col w-full">
                <span>Jenis Kelamin</span>
                <select name="jenis_kelamin"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
                    <option value="Laki-laki" {{ $pegawai->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                    </option>
                    <option value="Perempuan" {{ $pegawai->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                    </option>
                </select>
            </label>
            <label class="flex flex-col w-full">
                <span>Alamat</span>
                <textarea name="alamat" cols="10" rows="10"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black resize-none">{{ $pegawai->alamat }}</textarea>
            </label>
            <label class="flex flex-col w-full">
                <span>Jabatan</span>
                @php
                    $jabatan = [
                        ['id' => 'Pengurus Lab', 'nama' => 'Pengurus Lab'],
                        ['id' => 'Tata Usaha', 'nama' => 'Tata Usaha'],
                        ['id' => 'Kepala Sekolah', 'nama' => 'Kepala Sekolah'],
                        ['id' => 'Wakil Kepala Sekolah', 'nama' => 'Wakil Kepala Sekolah'],
                        ['id' => 'Kepala Jurusan', 'nama' => 'Kepala Jurusan'],
                        ['id' => 'Guru', 'nama' => 'Guru'],
                        ['id' => 'Wali Kelas', 'nama' => 'Wali Kelas'],
                    ];
                @endphp
                <select name="jabatan"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
                    @foreach ($jabatan as $jb)
                        <option value="{{ $jb['id'] }}" {{ $pegawai->jabatan == $jb['id'] ? 'selected' : '' }}>
                            {{ $jb['nama'] }}</option>
                    @endforeach
                </select>
            </label>
            <label class="flex flex-col w-full">
                <span>No. Telepon</span>
                <input type="telp" inputmode="telp" value="{{ $pegawai->no_hp }}" name="no_hp"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <label class="flex flex-col w-full">
                <span>Password</span>
                <input type="password" inputmode="password" name="password"
                    class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px] text-black">
            </label>
            <input type="submit" value="Kirim"
                class="px-4 py-2 bg-[#1d8b30] cursor-pointer hover:bg-[#136921] duration-150 rounded-[5px] mt-4">
        </form>
    </div>
@endsection
