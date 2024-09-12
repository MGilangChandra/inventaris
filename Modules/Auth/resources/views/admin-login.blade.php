@extends('auth::layouts.master')

@section('content')
    <aside class="bg-white w-full lg:w-[624px] fixed top-0 right-0 h-screen px-4 py-6 pt-36">
        <h1 class="font-bold text-4xl text-center">Login</h1>
        <form action="{{ route('proses-login') }}" method="POST" class=" gap-4 md:gap-8 flex flex-col">
            @method('POST')
            @csrf
            <label>
                <p class="font-semibold">Username</p>
                <input type="text" name="username" required class="border-[3px] border-[#4f4f4f] rounded-2xl flex w-full p-2 outline-none bg-transparent">
            </label>
            <label>
                <p class="font-semibold">Password</p>
                <input type="password" name="password" required class="border-[3px] border-[#4f4f4f] rounded-2xl flex w-full p-2 outline-none bg-transparent">
            </label>
            <button type="submit" class="bg-[#4f4f4f] rounded-2xl flex w-full p-3 outline-none justify-center text-[#FFF7FC] font-semibold mt-8">Enter</button>
        </form>
        <a href="{{ route('home') }}" class="border-2 border-[#0008] rounded-2xl flex w-full p-3 outline-none justify-center text-black  font-semibold mt-4">Kembali</a>

    </aside>
    <a href="{{ route('pegawai.login') }}" class="absolute top-5 left-2 flex items-center font-bold text-black lg:text-white"><box-icon name='chevron-left' class="fill-black lg:fill-white"></box-icon>Pegawai</a>
@endsection