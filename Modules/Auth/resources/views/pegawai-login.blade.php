@extends('auth::layouts.master')

@section('content')
    <aside class="bg-white px-4 py-6 w-full lg:w-[624px] fixed top-0 left-0 h-screen pt-36">
        <h1 class="font-bold text-4xl text-center">Login</h1>
        <form action="" class=" gap-4 md:gap-8 flex flex-col">
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
    <a href="{{  route('login') }}" class="absolute top-5 left-2 flex items-center font-bold text-black"><box-icon name='chevron-left'></box-icon>Admin</a>
@endsection