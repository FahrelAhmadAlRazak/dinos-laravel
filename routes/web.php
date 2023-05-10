<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('landing-page');
})->name('landing.page');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', [App\Http\Controllers\AkunController::class,'show_signup']) ->name('showsignup');
Route::post('/signup', [App\Http\Controllers\AkunController::class,'create_akun']) ->name('signup');

Route::get('/dashboard_all', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/akun_edit_all', function () {
    return view('akunEdit');
})->name('akun_edit');

Route::get('/akun_all', function () {
    return view('akun');
})->name('akun');

Route::get('/pengajuan_all', function () {
    return view('pengajuan');
})->name('pengajuan');


Route::get('/buat_pengajuan_all-1', function () {
    return view('buatPengajuan-1');
})->name('buat_pengajuan-1');

Route::get('/pengiriman', function () {
    return view('pengiriman');
})->name('pengiriman');

Route::get('/tambahPengiriman', function () {
    return view('tambahPengiriman');
})->name('tambahPengiriman');

Route::get('/lihatPengiriman', function () {
    return view('lihatPengiriman');
})->name('lihatPengiriman');

Route::get('/detailPengiriman', function () {
    return view('detailPengiriman');
})->name('detailPengiriman');

Route::get('/statusPengiriman', function () {
    return view('statusPengiriman');
})->name('statusPengiriman');

Route::get('/dataPartner', function () {
    return view('dataPartner');
})->name('dataPartner');

Route::get('/coba', function () {
    return view('coba');
})->name('coba');

Route::get('/monitor', function () {
    return view('monitor');
})->name('monitor');

Route::get('/detailMonitor', function () {
    return view('detailMonitor');
})->name('detailMonitor');





// Route::get('/data_pengajuan', function () {
//     return view('dataPengajuan');
// })->name('data_pengajuan');




Route::get('/landing-page', [App\Http\Controllers\LandingPageController::class,'index']) ->name('index');

Route::post('/postsignin', [App\Http\Controllers\SigninController::class,'postsignin']) ->name('postsignin');

Route::get('/logout', [App\Http\Controllers\SigninController::class,'logout']) ->name('logout');

Route::get('/akun', [App\Http\Controllers\AkunController::class,'read_akun']) ->name('read_akun');

Route::get('/edit', [App\Http\Controllers\AkunController::class,'edit']) ->name('edit');

// Route::post('/update', [App\Http\Controllers\AkunController::class,'update_akun']) ->name('update');

Route::get('/buat_pengajuan', [App\Http\Controllers\PengajuanController::class,'show']) ->name('show');

Route::post('/buat_pengajuan', [App\Http\Controllers\PengajuanController::class,'show']) ->name('show');







Route::group(['middleware'=> ['auth:dataAkunAdmin,dataAkunMitra,dataAkunKurir']],function(){
    
    Route::post('/update', [App\Http\Controllers\AkunController::class,'update_akun']) ->name('update');
    
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'dash']) ->name('dash');

    Route::get('/akun', [App\Http\Controllers\DashboardController::class,'akun']) ->name('account');

    Route::get('/akunEdit', [App\Http\Controllers\DashboardController::class,'akunEdit']) ->name('account_edit');

    Route::get('/pengajuan', [App\Http\Controllers\DashboardController::class,'pengajuan']) ->name('pengaj');

    Route::post('/cekpassword', [App\Http\Controllers\AkunController::class,'checkPassword']) ->name('cekPassword');
});



// Route::group(['middleware'=> ['auth','ceklevel:mitra']],function(){
    
    //     Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'dash']) ->name('dash');

//     Route::get('/akun', [App\Http\Controllers\DashboardController::class,'akun']) ->name('account');

//     Route::get('/akunEdit', [App\Http\Controllers\DashboardController::class,'akunEdit']) ->name('account_edit');

//     Route::get('/pengajuan', [App\Http\Controllers\DashboardController::class,'pengajuan']) ->name('pengaj');

// });

// Route::group(['middleware'=> ['auth','ceklevel:kurir']],function(){
    
//     Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'dash']) ->name('dash');

//     Route::get('/akun', [App\Http\Controllers\DashboardController::class,'akun']) ->name('account');

//     Route::get('/akunEdit', [App\Http\Controllers\DashboardController::class,'akunEdit']) ->name('account_edit');



// });


Route::get('/buat_pengajuan_all',[App\Http\Controllers\PengajuanController::class,'showKota'])->name('buat_pengajuan');

Route::get('/data_pengajuan',[App\Http\Controllers\PengajuanController::class,'showDataDetailPengajuan'])->name('show_dt_detail_pengajuan');



Route::post('/buat_pengajuan_all',[App\Http\Controllers\PengajuanController::class,'create'])->name('create_pengajuan');

Route::post('/buat_pengajuan_all-1',[App\Http\Controllers\PengajuanController_1::class,'create_1'])->name('create_pengajuan_1');




// Route::get('/setujuiPengajuan/{dataDetailPengajuan}',[App\Http\Controllers\PengajuanController::class,'setujuiPengajuan'])->name('setujuiPengajuan');

// Route::get('/detail_pengajuan/{id}',[App\Http\Controllers\PengajuanController::class,'showDetailDataPengajuan']);


Route::get('/detail_pengajuan/{id}',[App\Http\Controllers\PengajuanController::class,'showDetailDataPengajuan']);

Route::get('/setujuiPengajuan/{dataDetailPengajuan}',[App\Http\Controllers\PengajuanController::class,'setujuiPengajuan'])->name('setujuiPengajuan');

Route::get('/tolakPengajuan/{dataDetailPengajuan}',[App\Http\Controllers\PengajuanController::class,'tolakPengajuan'])->name('tolakPengajuan');
// Route::get('/buat_pengajuan_all',[App\Http\Controllers\ShowProvinsiController::class,'showProvinsi'])->name('buat_pengajuan1');


Route::get('/parnerMitra',[App\Http\Controllers\AkunController::class,'showDataPartner'])->name('showDataPartner');

Route::get('/detailPartnerMitra/{id}',[App\Http\Controllers\AkunController::class,'showDataAkunMitra'])->name('showDataAkunMitra');


Route::get('/partnerKurir',[App\Http\Controllers\AkunController::class,'showDataPartner_1'])->name('showDataPartner_1');

Route::get('/detailPartnerKurir/{id}',[App\Http\Controllers\AkunController::class,'showDataAkunKurir'])->name('showDataAkunKurir');

