@extends('auth::layouts.master')

@section('content')
    <aside class="bg-white w-full lg:w-[624px] fixed top-0 left-0 h-screen pt-36">
        <h1 class="font-bold text-4xl text-center">Login</h1>
        <form action="" class="p-4 py-6 gap-4 md:gap-8 flex flex-col">
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
    </aside>
@endsection