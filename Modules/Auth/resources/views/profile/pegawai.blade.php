@extends('layouts.user')

@section('body')
    <div x-data="{ isEditing: false }">
        <h1 class="text-2xl font-semibold">Profile</h1>
        <form action="">
            <div class="p-0 md:p-4 flex flex-col gap-4">
                <label>
                    <p class="text-lg">Nama</p>
                    <input type="text" name="nama" placeholder="M. Gilang Chandrawinata" 
                        class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" 
                        x-bind:readonly="!isEditing">
                </label>
                <label>
                    <p class="text-lg">Jenis Kelamin</p>
                    <input type="text" name="jenis_kelamin" placeholder="Laki-laki" 
                        class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" 
                        x-bind:readonly="!isEditing">
                </label>
                <label>
                    <p class="text-lg">Alamat</p>
                    <textarea name="alamat" placeholder="Jln. Makmur Dusun 6 Kenanga" 
                        class="resize-none border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" 
                        cols="60" rows="5" x-bind:readonly="!isEditing"></textarea>
                </label>
                <label>
                    <p class="text-lg">Jabatan</p>
                    <input type="text" name="jabatan" placeholder="Manajer" 
                        class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" 
                        x-bind:readonly="!isEditing">
                </label>
            </div>
            <div class="flex justify-end py-4">
                <button type="button" x-on:click="isEditing = !isEditing" 
                        class="bg-[#4f4f4f] cursor-pointer px-4 py-2 flex items-center justify-center gap-2 rounded-[5px] font-medium text-white">
                    <box-icon name='pencil' type='solid' color='#ffffff'></box-icon>Edit
                </button>
            </div>
        </form>
    </div>
@endsection
