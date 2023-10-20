<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DokterrsController;
use App\Http\Controllers\KepalarumahsakitController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatapetugasController;
use App\Http\Controllers\Admin\DatadokterController;
use App\Http\Controllers\Admin\LandingpagenavpicController;
use App\Http\Controllers\Admin\LandingpagepredataController;
use App\Http\Controllers\Admin\MenupetugasController;

use App\Http\Controllers\Petugas;
use App\Http\Controllers\Petugas\DashboardpetugasController;
use App\Http\Controllers\Petugas\DatapasienController;
use App\Http\Controllers\Petugas\DataberkasController;
use App\Http\Controllers\Petugas\laporanberkasController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LandingController::class, 'index'])->name('landing_page');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//Admin
Route::prefix('admin')->group(function(){
    Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
    Route::post('/actionlogout', [LoginController::class, 'actionlogout'])->name('admin.logout')->middleware('auth');

    //Dashboard
    Route::get('/dashboard', [Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    //Datapetugas
    Route::get('/datapetugas', [Admin\DatapetugasController::class, 'index'])->name('admin.datapetugas');
    Route::post('/datapetugas/store', [Admin\DatapetugasController::class, 'store'])->name('admin.storedatapetugas');
    Route::post('/datapetugas/update/{id_petugas}', [Admin\DatapetugasController::class, 'update'])->name('admin.updatedatapetugas');
    Route::get('/datapetugas/{id_petugas}', [Admin\DatapetugasController::class, 'destroy'])->name('admin.destroydatapetugas');

    //Datadokter
    Route::get('/datadokter', [Admin\DatadokterController::class, 'index'])->name('admin.datadokter');
    Route::post('/datadokter/store', [Admin\DatadokterController::class, 'store'])->name('admin.storedatadokter');
    Route::post('/datadokter/update/{id_dokter}', [Admin\DatadokterController::class, 'update'])->name('admin.updatedatadokter');
    Route::get('/datadokter/{id_dokter}', [Admin\DatadokterController::class, 'destroy'])->name('admin.destroydatadokter');

    //Landing page nav pic
    Route::get('/landingpagenavpic', [Admin\LandingpagenavpicController::class, 'index'])->name('admin.navpic');
    Route::post('/landingpagenavpic/store', [Admin\LandingpagenavpicController::class, 'store'])->name('admin.storenavpic');
    Route::post('/landingpagenavpic/update/{id}', [Admin\LandingpagenavpicController::class, 'update'])->name('admin.updatenavpic');
    Route::get('/landingpagenavpic/{id}', [Admin\LandingpagenavpicController::class, 'destroy'])->name('admin.destroynavpic');

    //Landing page pre data
    Route::get('/landingpagepredata', [Admin\LandingpagepredataController::class, 'index'])->name('admin.predata');
    Route::post('/landingpagepredata/store', [Admin\LandingpagepredataController::class, 'store'])->name('admin.storepredata');
    Route::post('/landingpagepredata/update/{id}', [Admin\LandingpagepredataController::class, 'update'])->name('admin.updatepredata');
    Route::get('/landingpagepredata/{id}', [Admin\LandingpagepredataController::class, 'destroy'])->name('admin.destroypredata');

    //Menu petugas
    Route::get('/menupetugas', [Admin\MenupetugasController::class, 'index'])->name('admin.menupetugas');
    Route::post('/menupetugas/store', [Admin\MenupetugasController::class, 'store'])->name('admin.storemenupetugas');
    Route::post('/menupetugas/update/{id}', [Admin\MenupetugasController::class, 'update'])->name('admin.updatemenupetugas');
    Route::get('/menupetugas/{id}', [Admin\MenupetugasController::class, 'destroy'])->name('admin.destroymenupetugas');    
});

//Petugas
Route::prefix('petugas')->group(function(){
    // Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
    // Route::post('/actionlogout', [LoginController::class, 'actionlogout'])->name('admin.logout')->middleware('auth');

    //Dashboard
    Route::get('/dashboard', [Petugas\DashboardpetugasController::class, 'index'])->name('petugas.dashboard');

    //Data pasien
    Route::get('/datapasien', [Petugas\DatapasienController::class, 'index'])->name('petugas.datapasien');
    Route::post('/datapasien/store', [Petugas\DatapasienController::class, 'store'])->name('petugas.storedatapasien');
    Route::post('/datapasien/update/{id_pasien}', [Petugas\DatapasienController::class, 'update'])->name('petugas.updatedatapasien');
    Route::get('/datapasien/{id_pasien}', [Petugas\DatapasienController::class, 'destroy'])->name('petugas.destroydatapasien');

    //Data berkas
    Route::get('/databerkas', [Petugas\DataberkasController::class, 'index'])->name('petugas.databerkas');
    Route::post('/databerkas/store', [Petugas\DataberkasController::class, 'store'])->name('petugas.storedataberkas');
    Route::post('/databerkas/update/{id_berkas}', [Petugas\DataberkasController::class, 'update'])->name('petugas.updatedataberkas');
    Route::get('/databerkas/{id_berkas}', [Petugas\DataberkasController::class, 'destroy'])->name('petugas.destroydataberkas');

    //Laporan berkas
    Route::get('/laporanberkas', [Petugas\LaporanberkasController::class, 'index'])->name('petugas.laporanberkas');
    Route::get('/laporanberkas/previewpasien', [Petugas\LaporanberkasController::class, 'datapasien'])->name('petugas.previewpasien');
    Route::get('/laporanberkas/previewberkas', [Petugas\LaporanberkasController::class, 'databerkas'])->name('petugas.previewberkas');    
});

Route::get('/laporanberkasrumahsakit', [KepalarumahsakitController::class, 'index'])->name('petugas.laporanberkasrs');
Route::get('/laporanberkasrumahsakit/previewpasienpoligigi', [KepalarumahsakitController::class, 'datapasien'])->name('petugas.previewpasienrs');
Route::get('/laporanberkasrumahsakit/previewberkaspoligigi', [KepalarumahsakitController::class, 'databerkas'])->name('petugas.previewberkasrs');

Route::get('/dokter', [DokterrsController::class, 'index'])->name('dokterrs');