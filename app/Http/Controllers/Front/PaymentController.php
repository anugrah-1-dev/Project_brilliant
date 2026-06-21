<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\StoreRequest;
use App\Models\Bank;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Transport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
	public function pembayaran($slug, $token)
	{
		return view('pages.landing.payment', [
			'course' => Course::whereSlug($slug)->firstOrFail(),
			'student' => Student::where('token', $token)->firstOrFail(),
			'transport' => Transport::where('id', Session::get('transport_id'))->firstOrFail(),
			'bank' => Bank::where('id', Session::get('bank_id'))->firstOrFail(),
			'payment_type' => Session::get('payment_type'),
		]);
	}

	public function transfer(StoreRequest $request, $slug, $token)
	{
		$validated = $request->validated();

		if ($request->hasFile('transport_payment')) {
			$transportPaymentFilePath = $request->file('transport_payment')->store('payment/transport', 'public');
			$validated['transport_payment'] = $transportPaymentFilePath;
		}

		if ($request->hasFile('course_payment')) {
			$coursePaymentFilePath = $request->file('course_payment')->store('payment/course', 'public');
			$validated['course_payment'] = $coursePaymentFilePath;
		}

		$validated['student_id'] = $request->student_id;
		$validated['course_id'] = Session::get('course_id'); // session dari DaftarController@store
		$validated['period_id'] = Session::get('period_id');
		$validated['transport_id'] = Session::get('transport_id');
		$validated['bank_id'] = Session::get('bank_id');
		$validated['total'] = $request->total;
		$validated['type'] = Session::get('payment_type');
		$validated['status'] = 'pending';

		$create = Payment::create($validated);

		if ($create) {
			Session::forget(['student_token', 'course_id', 'period_id', 'transport_id', 'bank_id', 'payment_type']);

			return redirect()->route('landing.payment.success', $token);
		}

		return abort(500);
	}

	public function success($token)
	{
		return view('pages.landing.success', compact('token'));
	}

	public function print($token)
	{
		// 1. Ambil data Siswa
		$student = Student::where('token', $token)->firstOrFail();

		// 2. Ambil data Pembayaran
		// OPTIMASI: Hanya load relasi yang benar-benar dipakai di view ('student', 'course', 'period')
		// Membuang relasi tak terpakai (seperti 'transport', 'bank') akan sedikit mempercepat query.
		$payment = Payment::with(['student', 'course', 'period'])
			->where('student_id', $student->id)
			// Opsional: tambahkan ->latest() jika ingin memastikan data pembayaran terakhir
			->firstOrFail();

		// 3. Load PDF
		$pdf_preview = Pdf::loadView('pages.landing.invoice', [
			'payment' => $payment,
		]);

		// 4. Pengaturan Kertas
		// PENTING: Gunakan 'portrait' agar layout invoice vertikal tampil proporsional.
		$pdf_preview->setPaper('A4', 'portrait');

		// 5. Optimasi Performa
		// Karena di view kita pakai public_path(), set isRemoteEnabled ke false (default).
		// Ini mencegah DOMPDF mencoba mendownload aset via URL yang sering bikin lambat/timeout.
		$pdf_preview->setOptions([
			'isRemoteEnabled' => false,
			'dpi' => 96, // DPI standar layar/web, render lebih cepat dibanding high-res
			'defaultFont' => 'sans-serif' // Fallback font jika font utama gagal load
		]);

		// 6. Download File
		return $pdf_preview->download('Invoice-' . $token . '.pdf');
	}
}
