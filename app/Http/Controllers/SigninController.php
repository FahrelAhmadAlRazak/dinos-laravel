<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class SigninController extends Controller
{
    public function postsignin(Request $request){

        $request->validate([
            
            'email' => 'required',
            'password' => 'required',
            

        ]);
        if (Auth::guard('dataAkunAdmin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            // dd($request->email,$request->password);
            return redirect('/dashboard');
        }elseif(Auth::guard('dataAkunMitra')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect('/dashboard');
        }elseif(Auth::guard('dataAkunKurir')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect('/dashboard');
        }
        return redirect('signin')->with('error','Masukkan Kembali Email dan Password');
    }

    public function logout(Request $request){
        if(Auth::guard('dataAkunAdmin')->check()){
            Auth::guard('dataAkunAdmin')->logout();
        }elseif(Auth::guard('dataAkunMitra')->check()){
            Auth::guard('dataAkunMitra')->logout();
        }elseif(Auth::guard('dataAkunKurir')->check()){
            Auth::guard('dataAkunKurir')->logout();
        }
        return redirect('/home');
    }
}
