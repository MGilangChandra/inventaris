<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="p-4 bg-[#141414] min-h-screen w-full text-white">
        <h1 class="text-3xl font-bold my-4">Cetak Laporan</h1>
        <div class="overflow-hidden rounded-sm">
            <table class="w-full divide-2 divide-white border font-medium text-center border-[#fff5]">
                <thead>
                    <tr class=" divide-x-2 divide-[#fff5]">
                        <th class="p-2 w-14">No</th>
                        <th class="p-2 ">Nama</th>
                        <th class="p-2 ">Alamat</th>
                    </tr>
                </thead>
                <tbody class="bg-[#d1d1d1] text-black divide-y-2 divide-[#0005]">
                    <tr class="divide-x-2 divide-[#0005]">
                        <td class="p-2">1</td>
                        <td class="p-2">M. Gilang Chandrawinata</td>
                        <td class="p-2">Jln. Makmur Dusun 6 Kenanga</td>
                    </tr>
                    <tr class="divide-x-2 divide-[#0005]"">
                        <td class="p-2">1</td>
                        <td class="p-2">M. Gilang Chandrawinata</td>
                        <td class="p-2">Jln. Makmur Dusun 6 Kenanga</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>