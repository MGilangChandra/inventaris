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
            <li><a href="#" class="duration-150 hover:opacity-50">Home</a></li>
            <li><a href="#" class="duration-150 hover:opacity-50">Profile</a></li>
            <li><a href="#" class="duration-150 hover:opacity-50">Kontak</a></li>
            <li><a class="bg-[#C07F00] py-2 px-4 rounded-3xl flex items-center justify-center" href="{{ route('login') }}">Login</a>
            </li>
        </ul>
    </nav>
    {{-- Main Content --}}
    <section class="h-[calc(100vh-64px)] py-8 md:px-[10%] px-[5%]">
        <div class="flex gap-6 items-center flex-wrap w-full">
            <p class="cursor-pointer"><box-icon name='filter-alt' class="size-10" color='#ffffff'></box-icon></p>
            <label for="" class="flex items-center gap-2 px-2 py-2 border-2 border-[#fff5] rounded-3xl w-full hover:shadow-[0px_0px_12px_-5px_#fff5] duration-150">
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
            <div class="gap-4 mt-2 py-4 scrollbar-none overflow-x-scroll scroll-snap-x mandatory flex">
                {{-- List --}}
                <div class="flex-grow scroll-snap-align-center overflow-hidden flex-shrink-0 bg-slate-500 h-96 min-w-72 rounded-3xl max-w-80 relative">
                    <a href="#" class="absolute top-1 right-1 p-2 rounded-full duration-150 bg-slate-700 hover:bg-opacity-80 flex items-center justify-center z-10"><box-icon name='paper-plane' color='#ffffff' ></box-icon></a>
                    <div class="mb-1 w-full h-3/4  bg-slate-900">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2023/11/18/gunung-semeru_169.png?w=600&q=90" class="object-cover w-full h-full hover:opacity-75 duration-300" alt="">
                    </div>
                    <h1 class="text-center font-bold text-2xl">Nama</h1>
                    <a href="#" class="z-10 font-bold absolute duration-300 w-14 hover:w-[calc(100%-16px)] p-1 bg-slate-700 bottom-2 right-2 h-12 rounded-3xl flex items-center justify-center">Lihat</a>
                </div>
                <div class="flex-grow scroll-snap-align-center overflow-hidden flex-shrink-0 bg-slate-500 h-96 min-w-72 rounded-3xl max-w-80 relative">
                    <a href="#" class="absolute top-1 right-1 p-2 rounded-full duration-150 bg-slate-700 hover:bg-opacity-80 flex items-center justify-center z-10"><box-icon name='paper-plane' color='#ffffff' ></box-icon></a>
                    <div class="mb-1 w-full h-3/4  bg-slate-900">
                        <img src="https://asset.kompas.com/crops/OD9itl1d8QHvxgLLaKN3u13KhYw=/1x0:1000x666/750x500/data/photo/2023/02/28/63fdb9789cf09.jpg" class="object-cover w-full h-full hover:opacity-75 duration-300" alt="">
                    </div>
                    <h1 class="text-center font-bold text-2xl">Nama</h1>
                    <a href="#" class="z-10 font-bold absolute duration-300 w-14 hover:w-[calc(100%-16px)] p-1 bg-slate-700 bottom-2 right-2 h-12 rounded-3xl flex items-center justify-center">Lihat</a>
                </div>
                <div class="flex-grow scroll-snap-align-center overflow-hidden flex-shrink-0 bg-slate-500 h-96 min-w-72 rounded-3xl max-w-80 relative">
                    <a href="#" class="absolute top-1 right-1 p-2 rounded-full duration-150 bg-slate-700 hover:bg-opacity-80 flex items-center justify-center z-10"><box-icon name='paper-plane' color='#ffffff' ></box-icon></a>
                    <div class="mb-1 w-full h-3/4  bg-slate-900">
                        <img src="https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/gunung-sinabung-dari-desa-tiga-serangkai-karo-kamis-04062015.jpg" class="object-cover w-full h-full hover:opacity-75 duration-300" alt="">
                    </div>
                    <h1 class="text-center font-bold text-2xl">Nama</h1>
                    <a href="#" class="z-10 font-bold absolute duration-300 w-14 hover:w-[calc(100%-16px)] p-1 bg-slate-700 bottom-2 right-2 h-12 rounded-3xl flex items-center justify-center">Lihat</a>
                </div>
                <div class="flex-grow scroll-snap-align-center overflow-hidden flex-shrink-0 bg-slate-500 h-96 min-w-72 rounded-3xl max-w-80 relative">
                    <a href="#" class="absolute top-1 right-1 p-2 rounded-full duration-150 bg-slate-700 hover:bg-opacity-80 flex items-center justify-center z-10"><box-icon name='paper-plane' color='#ffffff' ></box-icon></a>
                    <div class="mb-1 w-full h-3/4  bg-slate-900">
                        <img src="https://lh5.googleusercontent.com/proxy/A2RdkoCMsChOYd3bd1m0qCGX_1sAtbZtPUE71_GlHHCSKDMCstFcq5hXvAV_CdBNNt2MP_ZEGJAb-9-tpR5LwsqDGvENdYG6zE4527YNvt7xgtKxjR2L68EVetzIJfQSQ_egXYV3RMw" class="object-cover w-full h-full hover:opacity-75 duration-300" alt="">
                    </div>
                    <h1 class="text-center font-bold text-2xl">Nama</h1>
                    <a href="#" class="z-10 font-bold absolute duration-300 w-14 hover:w-[calc(100%-16px)] p-1 bg-slate-700 bottom-2 right-2 h-12 rounded-3xl flex items-center justify-center">Lihat</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
