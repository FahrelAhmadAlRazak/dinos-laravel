@extends('layoutsDashboard.masterDashboard')
@section('content')

<div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
    <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
        <h1 class="text-3xl font-medium mb-4">Detail Produk</h1>
        <form>
            @csrf
            {{-- @method('put') --}}
            <table class="border w-full">
                <div class="form-group">
                <tr>
                    <td class="w-1/3 px-4 py-3">Nama Produk yang Diajukan</td>
                    <td>
                    
                    </td>
                </tr>
                </div>

                <div class="form-group">
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Jumlah Produk yang Diajukan</td>
                    <td>
                    
                    </td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                    <td class="w-1/3 px-4 py-3">Harga Produk yang Diajukan</td>
                    <td>
                   
                    </td>
                </tr>
                </div>

                <div class="form-group">
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Deskripsi Produk yang Diajukan</td>
                    <td>
                    
                    </td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                    <td class="w-1/3 px-4 py-3">Gambar Produk</td>
                    {{-- <td></td> --}}
                    <td>
                        
                    </td>
                </tr>
                </div>

                <div class="form-group">
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Status</td>
                    <td>
                    
                    </td>
                </tr>
                </div>
                
                
            </table>
            @if(Str::length(Auth::guard('dataAkunAdmin')->user()) > 0)
            <div class="flex gap-4 sm:w-1/3">
                <a class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center" href="#">Ubah Stok</a>
                <a  class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center"href="#">Tambah Stok</a>
                <!-- {{-- <a href="{{ route('show_dt_detail_pengajuan') }}" class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center">Kembali</a> --}} -->
                <!-- <a href="{{ route('update') }}" class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center">Simpan</a> -->
            </div>
            @endif
        </form>

@endsection