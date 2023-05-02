@extends('layoutsPengiriman.masterLihatPengiriman')
@section('content')
<div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
    <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
        <h1 class="text-3xl font-medium mb-4">Lihat Pengiriman</h1>
        <div>
            <table class="data-pengajuan border w-full overflow-x-scroll">
                <tr>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Nama Mitra</th>
                    <th>Alamat Tujuan</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Produk</th>
                    <th>Status</th>
                </tr>
            </table>
        </div>

    </div>
</div>
</div>
</div>
@endsection