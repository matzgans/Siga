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
    KmtbayiController,
    PrespendudukController,
    PartsekolahController,
    PtssekolahController,
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

    Route::get('/pegawai/index', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::get('/pegawai/destroy/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
    Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::get('/pegawai/show/{id}', [PegawaiController::class, 'show'])->name('pegawai.show');
    Route::get('/pegawai/pdf', [PegawaiController::class, 'pdf'])->name('pegawai.pdf');

});

// opd
Route::group(['middleware' => ['auth', 'HakAkses:pegawai']], function () {
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

    // 3. kematian bayi
    Route::get('/kmtbayi/index', [KmtbayiController::class, 'index'])->name('kmtbayi.index');
    Route::post('/kmtbayi/store', [KmtbayiController::class, 'store'])->name('kmtbayi.store');
    Route::post('/kmtbayi/update/{id}', [KmtbayiController::class, 'update'])->name('kmtbayi.update');
    Route::get('/kmtbayi/edit/{id}', [KmtbayiController::class, 'edit'])->name('kmtbayi.edit');
    Route::get('/kmtbayi/destroy/{id}', [KmtbayiController::class, 'destroy'])->name('kmtbayi.destroy');
    //  Data Terpilah Bidang Pendidikan
    // 1. Partisipasi sekolah
    Route::get('/partsekolah/index', [PartsekolahController::class, 'index'])->name('partsekolah.index');
    Route::post('/partsekolah/store', [PartsekolahController::class, 'store'])->name('partsekolah.store');
    Route::post('/partsekolah/update/{id}', [PartsekolahController::class, 'update'])->name('partsekolah.update');
    Route::get('/partsekolah/edit/{id}', [PartsekolahController::class, 'edit'])->name('partsekolah.edit');
    Route::get('/partsekolah/destroy/{id}', [PartsekolahController::class, 'destroy'])->name('partsekolah.destroy');
    
    // 1. Angka Putus Sekolah
    Route::get('/ptssekolah/index', [PtssekolahController::class, 'index'])->name('ptssekolah.index');
    Route::post('/ptssekolah/store', [PtssekolahController::class, 'store'])->name('ptssekolah.store');
    Route::post('/ptssekolah/update/{id}', [PtssekolahController::class, 'update'])->name('ptssekolah.update');
    Route::get('/ptssekolah/edit/{id}', [PtssekolahController::class, 'edit'])->name('ptssekolah.edit');
    Route::get('/ptssekolah/destroy/{id}', [PtssekolahController::class, 'destroy'])->name('ptssekolah.destroy');
    
    // Ipg
    // 3. Jum Penduduk
    Route::get('/prespenduduk/index', [PrespendudukController::class, 'index'])->name('prespenduduk.index');
    Route::post('/prespenduduk/store', [PrespendudukController::class, 'store'])->name('prespenduduk.store');
    Route::post('/prespenduduk/update/{id}', [PrespendudukController::class, 'update'])->name('prespenduduk.update');
    Route::get('/prespenduduk/edit/{id}', [PrespendudukController::class, 'edit'])->name('prespenduduk.edit');
    Route::get('/prespenduduk/destroy/{id}', [PrespendudukController::class, 'destroy'])->name('prespenduduk.destroy');
});

Route::group(['middleware' => ['auth', 'HakAkses:pegawai,admin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});



Route::get('/auth/register', [AuthController::class, 'register'])->name('register');
Route::post('/auth/register', [AuthController::class, 'registerproses'])->name('auth.registerproses');
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/loginproses', [AuthController::class, 'loginproses'])->name('auth.loginproses');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
