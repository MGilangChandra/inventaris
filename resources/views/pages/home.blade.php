<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventaris</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body class="bg-[#1d1d1d] text-white font-[Poppins]">
    {{-- Navigation --}}
    <nav class="flex items-center justify-between backdrop-blur-sm h-16 w-full md:px-[10%] px-[5%] ">
        <h1 class="text-2xl font-bold ">Inventaris</h1>
        <ul class="hidden gap-8 font-semibold items-center md:flex ">
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Kontak</a></li>
            <li><a class="bg-[#C07F00] py-2 px-4 rounded-3xl flex items-center justify-center" href="#">Login</a>
            </li>
        </ul>
    </nav>
    {{-- Main Content --}}
    <section class="h-[calc(100vh-64px)] py-8 md:px-[10%] px-[5%]">
        <div class="flex gap-6 items-center flex-wrap w-full">
            <p class="cursor-pointer"><box-icon name='filter-alt' class="size-10" color='#ffffff'></box-icon></p>
            <label for="" class="flex items-center gap-2 px-2 py-2 border-2 border-[#fff5] rounded-3xl w-full">
                <box-icon name='search' color='#ffffff'></box-icon>
                <input type="text" placeholder="Cari..." class="bg-transparent text-white flex outline-none w-full">
            </label>
        </div>
        {{-- Items --}}
        <div class="mt-4">
            <h1 class="text-2xl flex items-center gap-2">
                HOT
                <box-icon name="hot" class="size-10" color="#DE3636" type="solid"></box-icon>
            </h1>
            <div class="gap-4 mt-2 scrollbar-none overflow-x-auto scroll-snap-x mandatory flex">
                <div class="flex-grow scroll-snap-align-center flex-shrink-0 bg-red-600 h-96 min-w-72 rounded-2xl max-w-80 relative">
                    <a href="" class="absolute top-0 right-0"><box-icon name='link-external' class="p-2" color='#ffffff' ></box-icon></a>
                </div>
                {{-- <div class="flex-grow scroll-snap-align-center flex-shrink-0 bg-red-600 h-96 min-w-72 rounded-2xl max-w-80"></div>
                <div class="flex-grow scroll-snap-align-center flex-shrink-0 bg-red-600 h-96 min-w-72 rounded-2xl max-w-80"></div>
                <div class="flex-grow scroll-snap-align-center flex-shrink-0 bg-red-600 h-96 min-w-72 rounded-2xl max-w-80"></div>
                <div class="flex-grow scroll-snap-align-center flex-shrink-0 bg-red-600 h-96 min-w-72 rounded-2xl max-w-80"></div> --}}
            </div>
        </div>
    </section>
</body>

</html>
