@extends('layouts.user')

@section('body')
    <div x-data="{ isEditing: false }">
        <h1 class="text-2xl font-semibold">Profile</h1>
        <form action="{{ route('profile.edit', $akun->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="p-0 md:p-4 flex flex-col gap-4">
                <label>
                    <p class="text-lg">Nama</p>
                    <input type="text" name="nama"
                        class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]"
                        x-bind:disabled="!isEditing" :class="isEditing ? 'text-black' : 'text-gray-400 pointer-events-none'"
                        value="{{ $akun->nama }}">
                </label>
                <label>
                    <p class="text-lg">Username</p>
                    <input type="text" name="username"
                        class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]"
                        x-bind:disabled="!isEditing" :class="isEditing ? 'text-black' : 'text-gray-400 pointer-events-none'"
                        value="{{ $akun->username }}">
                </label>
                <label>
                    <p class="text-lg">Password</p>
                    <input type="text" name="password"
                        class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]"
                        x-bind:disabled="!isEditing">
                </label>
            </div>
            <div class="flex justify-end py-4 gap-4">
                <button type="submit" x-show="isEditing"
                    class="bg-green-700 cursor-pointer px-4 py-2 flex items-center justify-center gap-2 rounded-[5px] font-medium text-white">
                    <box-icon name='save' type='solid' color='#ffffff'></box-icon>Save
                </button>

                <button type="button" x-on:click="isEditing = !isEditing"
                    class="bg-[#4f4f4f] cursor-pointer px-4 py-2 flex items-center justify-center gap-2 rounded-[5px] font-medium text-white">
                    <box-icon :name='isEditing ? "x" : "pencil"' :type='!isEditing ? "solid" : "regular"' color='#ffffff'></box-icon><span
                        x-text="isEditing ? 'Batal' : 'Edit'"></span>
                </button>
            </div>
        </form>
        <form action="{{ route('logout') }}" method="post" class="">
            @method('post')
            @csrf
            <button type="submit" class="bg-[#b42222] cursor-pointer absolute bottom-2 w-[calc(100%-16px)] left-2 px-4 py-2 flex items-center justify-center rounded-lg font-medium text-white">
                Keluar
            </button>
        </form>
    </div>
@endsection
