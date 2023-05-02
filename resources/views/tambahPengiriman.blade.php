@extends('layoutsPengiriman.masterTambahPengiriman')
@section('content')
<div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
    <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
        <h1 class="text-3xl font-medium mb-4">Tambah Pengiriman</h1>
        <form action=# method=# >
            @csrf
            <table class="border w-full">
                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3 mb-3">Nama Mitra</td>
                        <td>
                            <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="w-full bg-transparent form-control">
                        </td>
                    </tr>
                </div>
                
                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3">Alamat Tujuan</td>
                        <td class="form-group">
                            <input type="text" name="nomer_izin_usaha" id="nomer_izin_usaha" class="w-full  bg-transparent form-control">
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td class="w-1/3 px-4 py-3">Nama Produk</td>
                        <td class="form-group">
                            <input type="text" name="notelp_perusahaan" id="notelp_perusahaan" class="w-full  bg-transparent form-control">
                        </td>
                    </tr>
                </div class="form-group">
                <div>
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3">jumlah Produk</td>
                        <td class="form-group">
                            <input type="email" name="email_perusahaan" id="email_perusahaan" class="w-full  bg-transparent form-control">
                        </td>
                    </tr>
                </div>
               
            </table>



            <button class="selanjutnya w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white flex justify-center items-center">Batal</button>
            <button class="selanjutnya w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white flex justify-center items-center">Kirim</button>
        </form>

        <!-- <a href="{{ route('buat_pengajuan-1') }}" class=" selanjutnya w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white flex justify-center items-center " id="logoutBtn">Selanjutnya</a> -->
        <!-- <a href="" class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center">Edit</a> -->
    </div>
</div>
</div>
</div>
@endsection