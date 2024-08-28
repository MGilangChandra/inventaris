<nav x-data="{ isOpen: false }" @click.outside="isOpen = false" class="h-20 flex justify-between items-center px-4 ">
    <div @click.stop="isOpen = !isOpen" class="bg-[#414141] p-2 rounded-lg flex items-center justify-center cursor-pointer ">
        <box-icon name='menu' color='#ffffff' class="size-8" ></box-icon>
    </div>
    <a href="/profile" class="flex gap-2 text-xl font-semibold">
        <span class="text-white">Gilang,</span>
        <span class="text-[#848484]">Manajer</span>
    </div>
    <aside :class="{'left-[12px] md:left-3': isOpen, '-left-full': !isOpen}" 
            class="w-[calc(100%-24px)]  duration-500 ease-in-out fixed bg-[#414141] rounded-xl h-[calc(100vh-95px)] md:w-80 bottom-4 border-2 border-[#4f4f4f] pt-10 z-10">
        <ul class="flex flex-col gap-2">
            <li><a href="/dashboard" class="flex items-center bg-[#1d1d1d50] h-12 px-4 text-xl font-semibold text-white hover:bg-[#1d1d1d75]">Dashboard</a></li>
            <li><a href="/staff" class="flex items-center bg-[#1d1d1d50] h-12 px-4 text-xl font-semibold text-white hover:bg-[#1d1d1d75]">Data Pegawai</a></li>
            <li><a href="/item" class="flex items-center bg-[#1d1d1d50] h-12 px-4 text-xl font-semibold text-white hover:bg-[#1d1d1d75]">Data Barang</a></li>
            <li><a href="" class="flex items-center bg-[#1d1d1d50] h-12 px-4 text-xl font-semibold text-white hover:bg-[#1d1d1d75]">Barang Masuk</a></li>
            <li><a href="" class="flex items-center bg-[#1d1d1d50] h-12 px-4 text-xl font-semibold text-white hover:bg-[#1d1d1d75]">Barang Keluar</a></li>
        </ul>
    </aside>
</nav>