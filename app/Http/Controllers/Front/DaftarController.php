<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StoreRequest;
use App\Models\Bank;
use App\Models\Course;
use App\Models\Period;
use App\Models\Student;
use App\Models\Transport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DaftarController extends Controller
{
	public function create($slug)
	{
		return view('pages.landing.daftar', [
			'course' => Course::whereSlug($slug)->firstOrFail(),
			'periods' => Period::all(),
			'banks' => Bank::where('status', 'active')->get(),
			'transports' => Transport::where('status', 'active')->get(),
		]);
	}

	public function store(StoreRequest $request, $slug)
	{
		$tahun = Carbon::now()->format('y');
		$tanggal = Carbon::now()->format('d');
		$menit = Carbon::now()->minute;
		$detik = Carbon::now()->second;
		$invoice = config('app.kode_unik') . $tahun . $tanggal . $menit . $detik;

		$validated = $request->validated();
		$validated['token'] = $invoice;

		$create = Student::create($validated);

		if ($create) {
			Session::put('student_token', $validated['token']);
			Session::put('course_id', $request->course_id);
			Session::put('transport_id', $request->transport);
			Session::put('period_id', $request->period);
			Session::put('bank_id', $request->payment_bank);
			Session::put('payment_type', $request->payment_type);
			Session::save();

			return redirect()->route('landing.payment.create', ['slug' => $slug, 'token' => $validated['token']]);
		}

		return abort(500);
	}
}
