<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\CourseFeatureController as AdminCourseFeatureController;
use App\Http\Controllers\Admin\PeriodController as AdminPeriodController;
use App\Http\Controllers\Admin\TransportController as AdminTransportController;
use App\Http\Controllers\Admin\BankController as AdminBankController;
use App\Http\Controllers\Admin\PermitController as AdminPermitController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

use App\Http\Controllers\Front\DaftarController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Front\LiveTourController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\Front\PermitController;

use App\Http\Controllers\ProfileController;
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

// Front
Route::name('landing.')->group(function () {
	// Beranda
	Route::get('/', [LandingController::class, 'index'])->name('index');

	// Pendaftaran
	Route::get('/daftar/{slug}', [DaftarController::class, 'create'])->name('daftar.create');
	Route::post('/daftar/{slug}', [DaftarController::class, 'store'])->name('daftar.store');

	// Pembayaran / Payment
	Route::get('/pembayaran/{slug}/{token}', [PaymentController::class, 'pembayaran'])->name('payment.create');
	Route::post('/pembayaran/{slug}/{token}/upload', [PaymentController::class, 'transfer'])->name('payment.store');

	// Success
	Route::get('/payment/{token}/success', [PaymentController::class, 'success'])->name('payment.success');

	// Print Invoice
	Route::get('/print/{token}', [PaymentController::class, 'print'])->name('invoice.print');

	// Live Tour
	Route::prefix('live-tour')->name('livetour.')->group(function () {
		Route::get('/brilliant-home', [LiveTourController::class, 'home'])->name('home');
		Route::get('/brilliant-hall', [LiveTourController::class, 'hall'])->name('hall');
		Route::get('/classroom', [LiveTourController::class, 'classroom'])->name('classroom');

		Route::prefix('asrama')->group(function () {
			Route::get('/reguler', [LiveTourController::class, 'reguler'])->name('asrama.reguler');
			Route::get('/homestay', [LiveTourController::class, 'homestay'])->name('asrama.homestay');
			Route::get('/vip', [LiveTourController::class, 'vip'])->name('asrama.vip');
		});
	});

	// Permit / Perizinan
	Route::get('/surat-perizinan/{kategori}', [PermitController::class, 'create'])->name('permit.create');
	Route::post('/surat-perizinan', [PermitController::class, 'store'])->name('permit.store');
	Route::get('/surat-perizinan/{code}/success', [PermitController::class, 'show'])->name('permit.show');
	Route::get('/surat-perizinan/{code}/print', [PermitController::class, 'print'])->name('permit.print');
});



// Admin
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
	// Dashboard
	Route::get('/', [DashboardController::class, 'index'])->name('index');
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

	// List Pengguna (Calon Siswa)
	Route::resource('students', AdminStudentController::class)->only(['index', 'show']);

	// List Transaksi (Payment/Pembayaran)
	Route::get('/payments/{payment}/print', [AdminPaymentController::class, 'print'])->name('payments.print');
	Route::get('/payments/{payment}/download/{type?}', [AdminPaymentController::class, 'download'])->name('payments.download');
	Route::resource('payments', AdminPaymentController::class)->only(['index', 'show']);

	// Program Belajar
	Route::get('/courses/{course}/status', [AdminCourseController::class, 'status'])->name('courses.status');
	Route::resource('courses', AdminCourseController::class);

	// Luaran Program Belajar
	Route::prefix('courses')->name('course.')->group(function () {
		// Route::resource('features', AdminCourseFeatureController::class)->only(['show', 'edit', 'update']);
		Route::post('{course}/feature/', [AdminCourseFeatureController::class, 'store'])->name('features.store');
		Route::get('{course}/feature/create/', [AdminCourseFeatureController::class, 'create'])->name('features.create');
		Route::get('/feature/{feature}', [AdminCourseFeatureController::class, 'show'])->name('features.show');
		Route::get('/feature/{feature}/status', [AdminCourseFeatureController::class, 'status'])->name('features.status');
	});

	// Periode
	Route::resource('periods', AdminPeriodController::class)->only(['index', 'create', 'store']);

	// Akomodasi
	Route::get('/transports/{transport}/status', [AdminTransportController::class, 'status'])->name('transports.status');
	Route::resource('transports', AdminTransportController::class)->only(['index', 'create', 'store', 'show']);

	// Bank
	Route::get('/banks/{bank}/status', [AdminBankController::class, 'status'])->name('banks.status');
	Route::resource('banks', AdminBankController::class);

	Route::get('/permits/{permit}/status', [AdminPermitController::class, 'status'])->name('permit.member.status');
	Route::resource('permits', AdminPermitController::class)->only(['index', 'show']);

	// Kontak CS (WhatsApp)
	Route::get('/contacts/{contact}/status', [AdminContactController::class, 'status'])->name('contacts.status');
	Route::resource('contacts', AdminContactController::class)->except(['create', 'show', 'edit']);
});

// Admin Profile
Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
