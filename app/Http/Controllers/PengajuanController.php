<?php

namespace App\Http\Controllers;

use App\Models\dataDetailPengajuan;
use App\Models\dataKota;
use App\Models\dataPengajuan;
use App\Models\dataPerusahaan;
use App\Models\dataProduk;
use App\Models\dataProvinsi;
use App\Models\dataStatusPengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    // public function buatPengajuan(Request $request){
    //     $namaUser = new User([
    //         'name' => $request->nama,

    //     ]);
    //     $dataPerusahaan = new dataPerusahaan([
    //         'nama_perusahaan' => $request->nama_perusahaan,
    //         'jalan' => $request->jalan,
    //         'id_kota' => $request->id_kota,
    //         'id_provinsi' =>$request->id_provinsi,
    //         'nomor_izin_usaha' => $request->nomor_izin_usaha,
    //         'notelp_usaha'=> $request->notelp_usaha,
    //         'email_perusahaan'=> $request->email_perusahaan,
    //     ]);
    //     $dataProduk = new dataProduk([
    //         'nama_produk' =>$request->nama_produk,
    //         'harga_produk'=>$request->harga_produk,
    //         'deskripsi_produk'=>$request->deksripsi_produk,
    //         'gambar_produk'=>$request->gambar_produk
    //     ]);

    //     $namaUser->save();
    //     return redirect()->route('');
    
    // }

    public function showDataDetailPengajuan()
    {
        // $dataPengajuan = dataPengajuan::all();
        // $dataPerusahaan = dataPerusahaan::all();
        // $dataProduk = dataProduk::all();
        $dataDetailPengajuan = dataDetailPengajuan::all();
        
        // $dataDetailPengajuan = dataDetailPengajuan::find(3);

        // dd($dataPengajuan, $dataPerusahaan, $dataProduk, $dataDetailPengajuan);
        // @dd($dataDetailPengajuan->dataProduk());

        return view('dataPengajuan', compact('dataDetailPengajuan'));
    }

    public function showDataDetailPengajuanMitra()
    {
        // $dataPengajuan = dataPengajuan::all();
        // $dataPerusahaan = dataPerusahaan::all();
        // $dataProduk = dataProduk::all();
        $dataDetailPengajuan = dataDetailPengajuan::all();
        // $dataDetailPengajuan = dataDetailPengajuan::find(3);

        // dd($dataPengajuan, $dataPerusahaan, $dataProduk, $dataDetailPengajuan);
        // @dd($dataDetailPengajuan->dataProduk());

        return view('dataPengajuanMitra', compact('dataDetailPengajuan'));
    }

    public function showDetailDataPengajuan($id)
    {
        // @dd($dataDetailPengajuan);
        // $dataPengajuan = dataPengajuan::all();
        // $dataPerusahaan = dataPerusahaan::all();
        // $dataProduk = dataProduk::all();
        // $dataDetailPengajuan = dataDetailPengajuan::findOrFail($id);

        // $idDetailPengajuan = dataDetailPengajuan::find($id);
        // $dataDetailPengajuan = dataDetailPengajuan::find(3);

        // dd($dataPengajuan, $dataPerusahaan, $dataProduk, $dataDetailPengajuan);
        // @dd($dataDetailPengajuan->dataProduk());

        $dataDetailPengajuan = dataDetailPengajuan::find($id);

        return view('detailPengajuan', compact('dataDetailPengajuan'));

    }


    

    public function showKota(){
        $kota = dataKota::all();
        $provinsi = dataProvinsi::all();
        return view('buatPengajuan',compact('kota','provinsi'));
        
        
    }
    
    
     
    public function create(Request $request){

        $request->validate([
            'nama_perusahaan' => 'required',
            'jalan' => 'required',
            'id_kota'=> 'required',
            'id_provinsi'=> 'required',
            'nomer_izin_usaha' => 'required',
            'notelp_perusahaan' => 'required',
            'email_perusahaan' =>'required',
            'nama_produk' =>'required',
            'jumlah_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi_produk' => 'required',
            'gambar_produk' => 'required'

        ]);
        
        $dataPerusahaan = dataPerusahaan::create([
            // 'id_perusahaan'=> $idPerusahaan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'nomer_izin_usaha' => $request->nomer_izin_usaha,
            'notelp_perusahaan' => $request->notelp_perusahaan,
            'email_perusahaan' => $request->email_perusahaan,
            'jalan' =>$request->jalan,
            'id_kota' =>$request->id_kota,
            'id_provinsi' =>$request->id_provinsi,
            
        ]);

        $gambar = $request->gambar_produk;
        $gmbr = $gambar->getClientOriginalName();

        $dataProduk = dataProduk::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'gambar_produk' => $gambar

        ]);
        $gambar->move(public_path().'/img',$gmbr);


        $dataPengajuan = dataPengajuan::create([
            'id_perusahaan_foreign' => $dataPerusahaan->id_perusahaan,
            'id_status_pengajuan' => 1,
            'id_mitra' => Auth::guard('dataAkunMitra')->user()->id_mitra,
            'tanggal' => '2023-07-22'
        ]);

        dataDetailPengajuan::create([
            'id_pengajuan' => $dataPengajuan->id_pengajuan,
            'id_produk' => $dataProduk->id_produk,
            'jumlah_produk' => $request->jumlah_produk,
        ]);

        return redirect('data_pengajuan')->with('success','data berhasil ditambahkan');
    }
    public function setujuiPengajuan(dataDetailPengajuan $dataDetailPengajuan){ 
        // @dd($dataDetailPengajuan);
        $detail = dataPengajuan::find($dataDetailPengajuan->dataPengajuan->id_pengajuan);
        $detail["id_status_pengajuan"] = 2;
        $data = $detail->toArray();
        // @dd($data);
        dataPengajuan::where('id_pengajuan', $detail->id_pengajuan)->update($data);

        return redirect('detailPengajuan', compact('dataDetailPengajuan'));

    }

    public function tolakPengajuan(dataDetailPengajuan $dataDetailPengajuan){ 
        // @dd($dataDetailPengajuan);
        $detail = dataPengajuan::find($dataDetailPengajuan->dataPengajuan->id_pengajuan);
        $detail["id_status_pengajuan"] = 3;
        $data = $detail->toArray();
        // @dd($data);
        dataPengajuan::where('id_pengajuan', $detail->id_pengajuan)->update($data);

        return view('detailPengajuan', compact('dataDetailPengajuan'));

    }
};