@extends('layouts.user')

@section('body')
    <div x-data="{ isEditing: false }">
        <h1 class="text-2xl font-semibold">Profile</h1>
        <form action="">
            <div class="p-0 md:p-4 flex flex-col gap-4">
                <label>
                    <p class="text-lg">Nama</p>
                    <input type="text" name="nama"
                        class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" 
                        x-bind:readonly="!isEditing"
                        value="{{ Auth::user()->nama }}">
                </label>
                <label>
                    <p class="text-lg">Username</p>
                    <input type="text" name="nama"
                        class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" 
                        x-bind:readonly="!isEditing"
                        value="{{ Auth::user()->username }}">
                </label>
                <label>
                    <p class="text-lg">Email</p>
                    <input type="text" name="nama"
                        class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" 
                        x-bind:readonly="!isEditing"
                        value="{{ Auth::user()->email }}">
                </label>
                <label>
                    <p class="text-lg">Password</p>
                    <input type="text" name="nama"
                        class="border-2 border-[#d1d1d1] md:px-4 p-2 w-full outline-none rounded-[5px]" 
                        x-bind:readonly="!isEditing">
                </label>
            </div>
            <div class="flex justify-end py-4 gap-4">
                <button type="button" x-on:click="isEditing = !isEditing" 
                        class="bg-[#4f4f4f] cursor-pointer px-4 py-2 flex items-center justify-center gap-2 rounded-[5px] font-medium text-white">
                    <box-icon name='pencil' type='solid' color='#ffffff'></box-icon><span x-text="isEditing ? 'Batal' : 'Edit'"></span>
                </button>

                <button type="submit" x-show="isEditing" class="bg-[#4f4f4f] cursor-pointer px-4 py-2 flex items-center justify-center gap-2 rounded-[5px] font-medium text-white">
                    <box-icon name='save' type='solid' color='#ffffff'></box-icon>Save
                </button>
            </div>
        </form>
    </div>
@endsection
