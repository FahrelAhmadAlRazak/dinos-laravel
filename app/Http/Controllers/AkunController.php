<?php

namespace App\Http\Controllers;

use App\Models\dataAkunAdmin;
use App\Models\dataAkunKurir;
use App\Models\dataAkunMitra;
use App\Models\dataKota;
use App\Models\dataProvinsi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function edit()
    {
        @dd(auth()->user());

    }

    public function show_signup() {
        $kota = dataKota::all();
        $provinsi = dataProvinsi::all();
        return view('signup',compact('kota','provinsi'));
    }

    public function create_akun(Request $request) {

        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jalan' =>'required',
            'id_kota'=> 'required',
            'id_provinsi'=> 'required',
            'no_telpon' =>'required',
            'tanggal_lahir' =>'required',
            'role' => 'required'

        ]);

        $request['password'] = Hash::make($request['password']);
        // @dd($request);
        $data = $request->except(['_token', 'role']);
        $data["remember_token"] = $request["_token"];
        if($request["role"] == 'mitra') {
            dataAkunMitra::create($data);
       
        }

        return redirect('signin')->with('successsignup','akun berhasil di buat');

    }

    public function checkPassword(Request $request){
        if (Hash::check( $request['password'], Auth::user()->getAuthPassword())) {
            $kota = dataKota::all();
            $provinsi = dataProvinsi::all();
            $validated = true;
            return view('akunEdit',compact('kota','provinsi','validated'));
            
        }
        return back();
        
        
    }

    public function update_akun(Request $request)
    {



        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'nullable',
            'nomor_identitas' =>'nullable',
            'jalan' =>'required',
            'id_kota'=> 'required',
            'id_provinsi'=> 'required',
            'no_telpon' =>'required',
            'tanggal_lahir' =>'required',
           

        ]);
        if($request['password']){
            $request['password'] = Hash::make($request['password']);
        }else{
            $request['password'] = Auth::user()->getAuthPassword();
        }
       
        $data = $request->except(['_token']);
        if((Auth::guard('dataAkunAdmin')->user())){

            dataAkunAdmin::where('id_admin', auth()->user()->id_admin)->update($data);
        }else{
            dataAkunKurir::where('id_kurir', auth()->user()->id_kurir)->update($data);

            dataAkunMitra::where('id_mitra', auth()->user()->id_mitra)->update($data);
        }
        
            
        return redirect('akun')->with('message','akun berhasil di edit');
        // $request->validate([
        //     'name' => 'required', 
        //     'email' => 'required|email',
        //     'nomor_telpon' => 'required', 
        //     'tanggal_lahir'=> 'required'
            
        // ]);

        // $akun = auth()->user();
        // dd(auth()->user());
        // $akun->update($request->all());
        // return redirect('akun')->with('message','akun berhasil di edit');


        

        // $user =Auth::user();
        // $user->name = $request['name'];
        // $user->email = $request['email'];
        // $user->nomor_telpon = $request['nomor_telpon'];
        // $user->tanggal_lahir = $request['tanggal_lahir'];
        // $user->save();
        // return back()->with('message','Profile Updated');



        
        // auth()->user()->update([
        //     'name' => $request->name, 
        //     'email' => $request->email,
        //     'nomor_telpon' => $request->nomor_telpon, 
        //     'tanggal_lahir' => $request->tanggal_laghir
            
        //     ]);
        //     return redirect('account')->with('message','profil updated');

        
    }

    public function showDataPartner()
    {
        // $dataPengajuan = dataPengajuan::all();
        // $dataPerusahaan = dataPerusahaan::all();
        // $dataProduk = dataProduk::all();
        $dataMitra = dataAkunMitra::all();
        $dataKurir = dataAkunKurir::all();
        // $dataDetailPengajuan = dataDetailPengajuan::find(3);

        // dd($dataPengajuan, $dataPerusahaan, $dataProduk, $dataDetailPengajuan);
        // @dd($dataDetailPengajuan->dataProduk());

        return view('partnerMitra', compact('dataMitra','dataKurir'));
    }

    public function showDataPartner_1()
    {
        // $dataPengajuan = dataPengajuan::all();
        // $dataPerusahaan = dataPerusahaan::all();
        // $dataProduk = dataProduk::all();
        $dataMitra = dataAkunMitra::all();
        $dataKurir = dataAkunKurir::all();
        // $dataDetailPengajuan = dataDetailPengajuan::find(3);

        // dd($dataPengajuan, $dataPerusahaan, $dataProduk, $dataDetailPengajuan);
        // @dd($dataDetailPengajuan->dataProduk());

        return view('partnerKurir', compact('dataMitra','dataKurir'));
    }

    public function showDataAkunMitra($id)
    {
        $dataAkunMitra = dataAkunMitra::find($id);

        // @dd($dataDetailPengajuan);
        // $dataPengajuan = dataPengajuan::all();
        // $dataPerusahaan = dataPerusahaan::all();
        // $dataProduk = dataProduk::all();
        // $dataDetailPengajuan = dataDetailPengajuan::findOrFail($id);

        // $idDetailPengajuan = dataDetailPengajuan::find($id);
        // $dataDetailPengajuan = dataDetailPengajuan::find(3);

        // dd($dataPengajuan, $dataPerusahaan, $dataProduk, $dataDetailPengajuan);
        // @dd($dataDetailPengajuan->dataProduk());

        return view('detailPartnerMitra', compact('dataAkunMitra'));

    }

    public function showDataAkunKurir($id)
    {
        $dataAkunKurir = dataAkunKurir::find($id);
        // @dd($dataDetailPengajuan);
        // $dataPengajuan = dataPengajuan::all();
        // $dataPerusahaan = dataPerusahaan::all();
        // $dataProduk = dataProduk::all();
        // $dataDetailPengajuan = dataDetailPengajuan::findOrFail($id);

        // $idDetailPengajuan = dataDetailPengajuan::find($id);
        // $dataDetailPengajuan = dataDetailPengajuan::find(3);

        // dd($dataPengajuan, $dataPerusahaan, $dataProduk, $dataDetailPengajuan);
        // @dd($dataDetailPengajuan->dataProduk());

        return view('detailPartnerKurir', compact('dataAkunKurir'));

    }

}
