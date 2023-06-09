@extends('layoutsPartner.masterPartnerKurir')
@section('content')

<div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
    <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
        <h1 class="text-3xl font-medium mb-4">Data Akun Mitra</h1>
        <div>
            <table class="data-pengajuan border w-full overflow-x-scroll">
                <tr>
                    <th>Id Mitra</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nomor Identitas</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Tanggal Lahir</th>

                </tr>

                @foreach ($dataKurir
                 as $item)

                <tr>
                    <td><a href="/detailPartnerKurir/{{ $item->id_kurir }}">{{ $item->id_kurir }}</a></td>
                    <td><a href="#">{{ $item->nama }}</a></td>
                    <td><a href="#">{{ $item->username }}</a></td>
                    <td><a href="#">{{ $item->email }}</a></td>
                    <td><a href="#">{{ $item->nomor_identitas }}</a></td>
                    <td><a href="#">{{ $item->jalan }}, {{ $item->dataKota->nama }}, {{ $item->dataProvinsi->nama }}</a></td>
                    <td><a href="#">{{ $item->no_telpon }}</a></td>
                    <td><a href="#">{{ $item->tanggal_lahir }}</a></td>

                </tr>
                @endforeach












            </table>
        </div>

    </div>
</div>
</div>
</div>


@endsection