<?php

use App\Http\Controllers\{
    PendudukController,
    DesaController,
    AgamaController,
    OpdController,
    PekerjaanController,
    PegawaiController,
    TahunController,
    AuthController,
    DashboardController,
    Klasifikasi_umurController,
    JabatanController,
    PkematianController,
    HivController,
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group( function(){
    Route::get('/', [DashboardController::class, 'landing'])->name('landing');
    Route::get('/ipg-penduduk', [DashboardController::class, 'ipgPenduduk'])->name('ipg-penduduk');
    Route::get('/ipg-jenkel', [DashboardController::class, 'ipgJenkel'])->name('ipg-jenkel');
    Route::get('/ipg-umur', [DashboardController::class, 'ipgUmur'])->name('ipg-umur');
    Route::get('/ipg-pendidikan', [DashboardController::class, 'ipgPendidikan'])->name('ipg-pendidikan');
    Route::get('/bkesehatan', [DashboardController::class, 'bkesehatan'])->name('bkesehatan');
    Route::get('/bpendidikan', [DashboardController::class, 'bpendidikan'])->name('bpendidikan');
    Route::get('/bsda', [DashboardController::class, 'bsda'])->name('bsda');
    Route::get('/bekonomi', [DashboardController::class, 'bekonomi'])->name('bekonomi');
    Route::get('/bpolitik', [DashboardController::class, 'bpolitik'])->name('bpolitik');
    Route::get('/bhukum', [DashboardController::class, 'bhukum'])->name('bhukum');

});


Route::group(['middleware' => ['auth', 'HakAkses:admin']], function () {
    // desa
    Route::get('/desa/index', [DesaController::class, 'index'])->name('desa.index');
    Route::post('/desa/store', [DesaController::class, 'store'])->name('desa.store');
    Route::get('/desa/edit/{id}', [DesaController::class, 'edit'])->name('desa.edit');
    Route::post('/desa/update/{id}', [DesaController::class, 'update'])->name('desa.update');
    Route::get('/desa/destroy/{id}', [DesaController::class, 'destroy'])->name('desa.destroy');

    // Agama
    Route::get('/agama/index', [AgamaController::class, 'index'])->name('agama.index');
    Route::post('/agama/store', [AgamaController::class, 'store'])->name('agama.store');
    Route::get('/agama/destroy/{id}', [AgamaController::class, 'destroy'])->name('agama.destroy');

    // opd
    Route::get('/opd/index', [OpdController::class, 'index'])->name('opd.index');
    Route::post('/opd/store', [OpdController::class, 'store'])->name('opd.store');
    Route::get('/opd/destroy/{id}', [OpdController::class, 'destroy'])->name('opd.destroy');

    // pekerjaan
    Route::get('/pekerjaan/index', [PekerjaanController::class, 'index'])->name('pekerjaan.index');
    Route::post('/pekerjaan/store', [PekerjaanController::class, 'store'])->name('pekerjaan.store');
    Route::get('/pekerjaan/destroy/{id}', [PekerjaanController::class, 'destroy'])->name('pekerjaan.destroy');

    // tahun
    Route::get('/tahun/index', [TahunController::class, 'index'])->name('tahun.index');
    Route::post('/tahun/store', [TahunController::class, 'store'])->name('tahun.store');
    Route::get('/tahun/destroy/{id}', [TahunController::class, 'destroy'])->name('tahun.destroy');
    
    // klasifikasi umur
    Route::get('/klasifikasiumur/index', [Klasifikasi_umurController::class, 'index'])->name('klasifikasiumur.index');
    Route::post('/klasifikasiumur/store', [Klasifikasi_umurController::class, 'store'])->name('klasifikasiumur.store');
    Route::get('/klasifikasiumur/destroy/{id}', [Klasifikasi_umurController::class, 'destroy'])->name('klasifikasiumur.destroy');
    
    // klasifikasi umur
    Route::get('/jabatan/index', [JabatanController::class, 'index'])->name('jabatan.index');
    Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
    Route::get('/jabatan/destroy/{id}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');

});

// desa
Route::group(['middleware' => ['auth', 'HakAkses:desa']], function () {
    Route::get('/penduduk/index', [PendudukController::class, 'index'])->name('penduduk.index');
    Route::post('/penduduk/store', [PendudukController::class, 'store'])->name('penduduk.store');
    Route::get('/penduduk/edit/{id}', [PendudukController::class, 'edit'])->name('penduduk.edit');
    Route::get('/penduduk/destroy/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');
    Route::post('/penduduk/update/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
    Route::get('/penduduk/show/{id}', [PendudukController::class, 'show'])->name('penduduk.show');
    Route::get('/penduduk/pdf', [PendudukController::class, 'pdf'])->name('penduduk.pdf');
});

// opd
Route::group(['middleware' => ['auth', 'HakAkses:opd,admin']], function () {
    // pegawai
    Route::get('/pegawai/index', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::get('/pegawai/destroy/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
    Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::get('/pegawai/show/{id}', [PegawaiController::class, 'show'])->name('pegawai.show');
    Route::get('/pegawai/pdf', [PegawaiController::class, 'pdf'])->name('pegawai.pdf');

    // Data Terpilah Bidang Kesehatan
    // 1. Kematia Ibu Hamil
    Route::get('/pkematian/index', [PkematianController::class, 'index'])->name('pkematian.index');
    Route::post('/pkematian/store', [PkematianController::class, 'store'])->name('pkematian.store');
    Route::post('/pkematian/update/{id}', [PkematianController::class, 'update'])->name('pkematian.update');
    Route::get('/pkematian/edit/{id}', [PkematianController::class, 'edit'])->name('pkematian.edit');
    Route::get('/pkematian/destroy/{id}', [PkematianController::class, 'destroy'])->name('pkematian.destroy');

    // 2. Penderita Hiv
    Route::get('/hiv/index', [HivController::class, 'index'])->name('hiv.index');
    Route::post('/hiv/store', [HivController::class, 'store'])->name('hiv.store');
    Route::post('/hiv/update/{id}', [HivController::class, 'update'])->name('hiv.update');
    Route::get('/hiv/edit/{id}', [HivController::class, 'edit'])->name('hiv.edit');
    Route::get('/hiv/destroy/{id}', [HivController::class, 'destroy'])->name('hiv.destroy');
});

Route::group(['middleware' => ['auth', 'HakAkses:opd,desa,admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::get('/penduduks/index', [PendudukController::class, 'index'])->name('penduduks.index');



Route::get('/auth/register', [AuthController::class, 'register'])->name('register');
Route::post('/auth/register', [AuthController::class, 'registerproses'])->name('auth.registerproses');
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/loginproses', [AuthController::class, 'loginproses'])->name('auth.loginproses');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
