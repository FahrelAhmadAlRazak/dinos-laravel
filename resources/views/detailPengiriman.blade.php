@extends('layoutsPengiriman.masterDetailPengiriman')
@section('content')
<div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
    <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
        <h1 class="text-3xl font-medium mb-4">Detail Pengiriman</h1>
       
        <table class="border w-full">

            <tr class="bg-slate-200">
                <td class="w-1/3 px-4 py-3">Id Pengiriman</td>

                <td></td>

            </tr>
            <tr>
                <td class="w-1/3 px-4 py-3">Tanggal</td>

                <td></td>

                <!-- <td>: admin@mail.com</td> -->
            </tr>

            <tr class="bg-slate-200">
                <td class="w-1/3 px-4 py-3">Nama Admin</td>

                <td> </td>

                <!-- <td>: 082345678901</td> -->
            </tr>
            <tr>
                <td class="w-1/3 px-4 py-3">Alamat Tujuan</td>

                <td></td>

                <!-- <td>: 2000-01-01</td> -->
            </tr>
            <tr class="bg-slate-200">
                <td class="w-1/3 px-4 py-3">Nama Produk</td>

                <td></td>

                <!-- <td>: 2000-01-01</td> -->
            </tr>

            <tr class="bg-slate-200">
                <td class="w-1/3 px-4 py-3">Jumlah Produk</td>

                <td></td>

                <!-- <td>: 2000-01-01</td> -->
            </tr>

            <tr class="bg-slate-200">
                <td class="w-1/3 px-4 py-3">Status</td>

                <td></td>

                <!-- <td>: 2000-01-01</td> -->
            </tr>
            <tbody>

            </tbody>
        </table>
        <div class="mt-8 flex justify-end">
            <div class="flex gap-4 w-1/3">
                <a href="{{ route('statusPengiriman') }}" class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center">Status</a>
                <!-- <button class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white flex justify-center items-center gap-1" id="logoutBtn"><img class="w-5" src="/test/images/logout.svg" alt="">Logout</button> -->
            </div>
        </div>
    </div>
</div>
@endsection