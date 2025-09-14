<?php

use App\Models\News;
use App\Models\Karir;
use App\Models\Doctor;
use App\Models\article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\HrdKarirController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterIhzaController;
use App\Http\Controllers\DokterKikiController;
use App\Http\Controllers\HrdOfficerController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DokterAhmedController;
use App\Http\Controllers\DokterHendyController;
use App\Http\Controllers\DokterIrfanController;
use App\Http\Controllers\DokterMariaController;
use App\Http\Controllers\DokterNadiaController;
use App\Http\Controllers\DokterAliyahController;
use App\Http\Controllers\DokterDenisaController;
use App\Http\Controllers\DokterMarshaController;
use App\Http\Controllers\DokterAndreasController;
use App\Http\Controllers\DokterEmersonController;
use App\Http\Controllers\DokterGartatiController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\DokterAdrianusController;
use App\Http\Controllers\DokterAgustianController;
use App\Http\Controllers\DokterDermawanController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/articles', function () {
    return view('articles', ['articles' => article::filter(request(['search']))->latest('id')->paginate('9')]);
});

Route::get('/articles/{article:slug}', function (article $article) {
    return view('article', ['title' => 'Single Post', 'article' => $article]);
});

Route::get('/news', function () {
    // $releases = Release::latest()->paginate(5);
    return view('news', ['news' => News::filter(request(['search']))->latest('id')->paginate(9)]);
});

Route::get('/news/{new:slug}', function (News $new) {
    return view('new', ['title' => 'Single Post', 'new' => $new]);
});

Route::get('/careers', function () {
    return view('careers', ['karirs' => Karir::filter()->latest('id')->get()]);
});

Route::get('/careers/{karir:slug}', function (Karir $karir) {

    return view('career', ['karir' => $karir]);
});

Route::get('/doctors', function () {
    return view('doctors', ['doctors' => Doctor::filter()->latest('id')->get()]);
});

Route::get('/doctors/{doctor:slug}', function (Doctor $doctor) {

    return view('doctor', ['doctor' => $doctor]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/oncology', function() {
    return view('oncology');
});

Route::get('/cardiology', function() {
    return view('cardiology');
});

Route::resource('/dokter/dr_adrianus', DokterAdrianusController::class);
Route::resource('/dokter/dr_agustian', DokterAgustianController::class);
Route::resource('/dokter/dr_ahmed', DokterAhmedController::class);
Route::resource('/dokter/dr_aliyah', DokterAliyahController::class);
Route::resource('/dokter/dr_andreas', DokterAndreasController::class);
Route::resource('/dokter/dr_denisa', DokterDenisaController::class);
Route::resource('/dokter/dr_dermawan', DokterDermawanController::class);
Route::resource('/dokter/dr_emerson', DokterEmersonController::class);
Route::resource('/dokter/dr_gartati', DokterGartatiController::class);
Route::resource('/dokter/dr_hendy', DokterHendyController::class);
Route::resource('/dokter/dr_ihza', DokterIhzaController::class);
Route::resource('/dokter/dr_irfan', DokterIrfanController::class);
Route::resource('/dokter/dr_kiki', DokterKikiController::class);
Route::resource('/dokter/dr_maria', DokterMariaController::class);
Route::resource('/dokter/dr_marsha', DokterMarshaController::class);
Route::resource('/dokter/dr_nadia', DokterNadiaController::class);

Route::get('/search', [SearchController::class, 'search']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->middleware('guest')
->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'forgot'])->middleware('guest')
->name('password.email');

Route::get('/reset-password', [ResetPasswordController::class, 'index'])->middleware('guest');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'reset'])->middleware('guest')
->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->middleware('guest')
->name('password.update');

Route::resource('/officer', OfficerController::class)->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('Admin');

Route::resource('/dashboard/pasien', PasienController::class)->middleware('Admin');
Route::get('/dashboard/pasien/', [SearchController::class, 'pasien'])->middleware('Admin');

Route::resource('/dashboard/karir', KarirController::class)->middleware('Admin');
Route::get('/dashboard/karir/', [SearchController::class, 'karir'])->middleware('Admin');

Route::resource('/dashboard/officer', HrdOfficerController::class)->middleware('Admin');
Route::get('/dashboard/officer/', [SearchController::class, 'officer'])->middleware('Admin');

Route::resource('/dashboard/user', UserController::class)->middleware('Developer');
Route::get('/dashboard/user/', [SearchController::class, 'user'])->middleware('Developer');