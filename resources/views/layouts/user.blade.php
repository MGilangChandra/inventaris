<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventaris</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')
</head>

<body class="bg-[#1D1D1D] font-[Poppins]">
    @include('components.navbar')
    
    <main class=" px-3 md:px-7 flex items-center">
        <div class="bg-white h-[calc(100vh-95px)] w-full rounded-[15px] p-2 overflow-y-auto scrollbar-none">
            @yield('body')
            
        </div>
    </main>
    
    @yield('script')
</body>

</html>
