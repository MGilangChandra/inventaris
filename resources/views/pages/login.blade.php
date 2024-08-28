<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Inventaris</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#1D1D1D] font-[Poppins]">
    <aside class="bg-white w-full lg:w-[624px] fixed top-0 right-0 h-screen pt-36">
        <h1 class="font-bold text-4xl text-center">Login</h1>
        <form action="" class="p-4 py-6 gap-4 md:gap-8 flex flex-col">
            <label>
                <p class="font-semibold">Username</p>
                <input type="text" name="" required class="border-[3px] border-[#4f4f4f] rounded-2xl flex w-full p-2 outline-none bg-transparent">
            </label>
            <label>
                <p class="font-semibold">Password</p>
                <input type="password" name="" required class="border-[3px] border-[#4f4f4f] rounded-2xl flex w-full p-2 outline-none bg-transparent">
            </label>
            <button type="submit" class="bg-[#4f4f4f] rounded-2xl flex w-full p-3 outline-none justify-center text-[#FFF7FC] font-semibold mt-8">Enter</button>
        </form>
    </aside>
</body>
</html>