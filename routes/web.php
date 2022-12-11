<?php

use App\Http\Controllers\{
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
    JumguruController, 
    BencanaController,
    TahananController,
    BsdaController,
    KlasprespendController,
    PrespendidikanController,
    AktkerjaController,
    JumkadesController,
    PlapaController,
    DisabilitasController,
    JumkekerasanController,
    JumkerlokController
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

    // bencana
    Route::get('/bencana/index', [BencanaController::class, 'index'])->name('bencana.index');
    Route::post('/bencana/store', [BencanaController::class, 'store'])->name('bencana.store');
    Route::post('/bencana/update/{id}', [BencanaController::class, 'update'])->name('bencana.update');
    Route::get('/bencana/edit/{id}', [BencanaController::class, 'edit'])->name('bencana.edit');
    Route::get('/bencana/destroy/{id}', [BencanaController::class, 'destroy'])->name('bencana.destroy');

    // tahanan
    Route::get('/tahanan/index', [TahananController::class, 'index'])->name('tahanan.index');
    Route::post('/tahanan/store', [TahananController::class, 'store'])->name('tahanan.store');
    Route::post('/tahanan/update/{id}', [TahananController::class, 'update'])->name('tahanan.update');
    Route::get('/tahanan/edit/{id}', [TahananController::class, 'edit'])->name('tahanan.edit');
    Route::get('/tahanan/destroy/{id}', [TahananController::class, 'destroy'])->name('tahanan.destroy');

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
    
    // 2. Angka Putus Sekolah
    Route::get('/ptssekolah/index', [PtssekolahController::class, 'index'])->name('ptssekolah.index');
    Route::post('/ptssekolah/store', [PtssekolahController::class, 'store'])->name('ptssekolah.store');
    Route::post('/ptssekolah/update/{id}', [PtssekolahController::class, 'update'])->name('ptssekolah.update');
    Route::get('/ptssekolah/edit/{id}', [PtssekolahController::class, 'edit'])->name('ptssekolah.edit');
    Route::get('/ptssekolah/destroy/{id}', [PtssekolahController::class, 'destroy'])->name('ptssekolah.destroy');
    
    // 3. Jumlah Guru
    Route::get('/jumguru/index', [JumguruController::class, 'index'])->name('jumguru.index');
    Route::post('/jumguru/store', [JumguruController::class, 'store'])->name('jumguru.store');
    Route::post('/jumguru/update/{id}', [JumguruController::class, 'update'])->name('jumguru.update');
    Route::get('/jumguru/edit/{id}', [JumguruController::class, 'edit'])->name('jumguru.edit');
    Route::get('/jumguru/destroy/{id}', [JumguruController::class, 'destroy'])->name('jumguru.destroy');
    
    // Ipg
    // 1. Jum Penduduk
    Route::get('/prespenduduk/index', [PrespendudukController::class, 'index'])->name('prespenduduk.index');
    Route::post('/prespenduduk/store', [PrespendudukController::class, 'store'])->name('prespenduduk.store');
    Route::post('/prespenduduk/update/{id}', [PrespendudukController::class, 'update'])->name('prespenduduk.update');
    Route::get('/prespenduduk/edit/{id}', [PrespendudukController::class, 'edit'])->name('prespenduduk.edit');
    Route::get('/prespenduduk/destroy/{id}', [PrespendudukController::class, 'destroy'])->name('prespenduduk.destroy');
    // 2. Klasifikasi Presetanse Penduduk
    Route::get('/klasprespend/index', [KlasprespendController::class, 'index'])->name('klasprespend.index');
    Route::post('/klasprespend/store', [KlasprespendController::class, 'store'])->name('klasprespend.store');
    Route::post('/klasprespend/update/{id}', [KlasprespendController::class, 'update'])->name('klasprespend.update');
    Route::get('/klasprespend/edit/{id}', [KlasprespendController::class, 'edit'])->name('klasprespend.edit');
    Route::get('/klasprespend/destroy/{id}', [KlasprespendController::class, 'destroy'])->name('klasprespend.destroy');
    // 3. Klasifikasi Presetanse Peendidikan
    Route::get('/prespendidikan/index', [PrespendidikanController::class, 'index'])->name('prespendidikan.index');
    Route::post('/prespendidikan/store', [PrespendidikanController::class, 'store'])->name('prespendidikan.store');
    Route::post('/prespendidikan/update/{id}', [PrespendidikanController::class, 'update'])->name('prespendidikan.update');
    Route::get('/prespendidikan/edit/{id}', [PrespendidikanController::class, 'edit'])->name('prespendidikan.edit');
    Route::get('/prespendidikan/destroy/{id}', [PrespendidikanController::class, 'destroy'])->name('prespendidikan.destroy');
    
    // BSDA / LINGKUNGAN
    // 1. Korban Bencana
    Route::get('/bsda/index', [BsdaController::class, 'index'])->name('bsda.index');
    Route::post('/bsda/store', [BsdaController::class, 'store'])->name('bsda.store');
    Route::post('/bsda/update/{id}', [BsdaController::class, 'update'])->name('bsda.update');
    Route::get('/bsda/edit/{id}', [BsdaController::class, 'edit'])->name('bsda.edit');
    Route::get('/bsda/destroy/{id}', [BsdaController::class, 'destroy'])->name('bsda.destroy');

    // Data Terpilah Bodang Ekonomi / Ketenaga kerjaan
    // 1. Jum Penduduk
    Route::get('/aktkerja/index', [AktkerjaController::class, 'index'])->name('aktkerja.index');
    Route::post('/aktkerja/store', [AktkerjaController::class, 'store'])->name('aktkerja.store');
    Route::post('/aktkerja/update/{id}', [AktkerjaController::class, 'update'])->name('aktkerja.update');
    Route::get('/aktkerja/edit/{id}', [AktkerjaController::class, 'edit'])->name('aktkerja.edit');
    Route::get('/aktkerja/destroy/{id}', [AktkerjaController::class, 'destroy'])->name('aktkerja.destroy');
    
    // Data Terpilah Bodang Politik
    // 1. Jum Kades
    Route::get('/jumkades/index', [JumkadesController::class, 'index'])->name('jumkades.index');
    Route::post('/jumkades/store', [JumkadesController::class, 'store'])->name('jumkades.store');
    Route::post('/jumkades/update/{id}', [JumkadesController::class, 'update'])->name('jumkades.update');
    Route::get('/jumkades/edit/{id}', [JumkadesController::class, 'edit'])->name('jumkades.edit');
    Route::get('/jumkades/destroy/{id}', [JumkadesController::class, 'destroy'])->name('jumkades.destroy');
    
    // Data Terpilah Bidang Hukum / Sosial Budaya
    // 1. Jum Penguni lapas
    Route::get('/plapas/index', [PlapaController::class, 'index'])->name('plapas.index');
    Route::post('/plapas/store', [PlapaController::class, 'store'])->name('plapas.store');
    Route::post('/plapas/update/{id}', [PlapaController::class, 'update'])->name('plapas.update');
    Route::get('/plapas/edit/{id}', [PlapaController::class, 'edit'])->name('plapas.edit');
    Route::get('/plapas/destroy/{id}', [PlapaController::class, 'destroy'])->name('plapas.destroy');
   
    // 2. Disabilitas
    Route::get('/disabilitas/index', [DisabilitasController::class, 'index'])->name('disabilitas.index');
    Route::post('/disabilitas/store', [DisabilitasController::class, 'store'])->name('disabilitas.store');
    Route::post('/disabilitas/update/{id}', [DisabilitasController::class, 'update'])->name('disabilitas.update');
    Route::get('/disabilitas/edit/{id}', [DisabilitasController::class, 'edit'])->name('disabilitas.edit');
    Route::get('/disabilitas/destroy/{id}', [DisabilitasController::class, 'destroy'])->name('disabilitas.destroy');

    // Kekerasan
    // 1. Jum kekerasan terhadap perempuan dan anak
    Route::get('/jumkekerasan/index', [JumkekerasanController::class, 'index'])->name('jumkekerasan.index');
    Route::post('/jumkekerasan/store', [JumkekerasanController::class, 'store'])->name('jumkekerasan.store');
    Route::post('/jumkekerasan/update/{id}', [JumkekerasanController::class, 'update'])->name('jumkekerasan.update');
    Route::get('/jumkekerasan/edit/{id}', [JumkekerasanController::class, 'edit'])->name('jumkekerasan.edit');
    Route::get('/jumkekerasan/destroy/{id}', [JumkekerasanController::class, 'destroy'])->name('jumkekerasan.destroy');
    // 2. Jum kekerasan terhadap perempuan dan anak menurut pendidika dan lokasi
    Route::get('/jumkerlok/index', [JumkerlokController::class, 'index'])->name('jumkerlok.index');
    Route::post('/jumkerlok/store', [JumkerlokController::class, 'store'])->name('jumkerlok.store');
    Route::post('/jumkerlok/update/{id}', [JumkerlokController::class, 'update'])->name('jumkerlok.update');
    Route::get('/jumkerlok/edit/{id}', [JumkerlokController::class, 'edit'])->name('jumkerlok.edit');
    Route::get('/jumkerlok/destroy/{id}', [JumkerlokController::class, 'destroy'])->name('jumkerlok.destroy');
});

Route::group(['middleware' => ['auth', 'HakAkses:pegawai,admin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});



Route::get('/auth/register', [AuthController::class, 'register'])->name('register');
Route::post('/auth/register', [AuthController::class, 'registerproses'])->name('auth.registerproses');
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/loginproses', [AuthController::class, 'loginproses'])->name('auth.loginproses');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
