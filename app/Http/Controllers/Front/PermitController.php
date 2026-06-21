<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Permit\StoreRequest;
use App\Models\Permit;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PermitController extends Controller
{
	public function create($kategori)
	{
		return view('pages.landing.permit.create', compact('kategori'));
	}

	public function store(StoreRequest $request)
	{
		$tahun = Carbon::now()->format('y');
		$tanggal = Carbon::now()->format('d');
		$menit = Carbon::now()->minute;
		$detik = Carbon::now()->second;
		$letter_code = "SP" . ($request->kategori == 'individu' ? 'I' : 'K') . $tahun . $tanggal . $menit . $detik;

		$validated = $request->validated();
		$validated['letter_code'] = $letter_code;
		$validated['permit_category'] = $request->kategori;
		// dd($validated);

		// Data Lainnya
		$validated['nama_pj'] = $validated['fullname'];
		$validated['ttd_pj'] = ($validated['ttd_pj'] != null) ? save_signature($validated['ttd_pj']) : null;
		if ($request->hasFile('scan_ktp')) {
			$ktpFilePath = $request->file('scan_ktp')->store('upload/ktp', 'public');
			$validated['scan_ktp'] = $ktpFilePath;
		}

		// Tanda Tangan Officer
		$validated['ttd_officer'] = ($validated['ttd_officer'] != null) ? save_signature($validated['ttd_officer']) : null;
		if ($request->hasFile('memo_pengantar')) {
			$memoFilePath = $request->file('memo_pengantar')->store('upload/memo', 'public');
			$validated['memo_pengantar'] = $memoFilePath;
		}

		$create = Permit::create($validated);

		if ($create) {
			return redirect()->route('landing.permit.show', $validated['letter_code']);
		}

		return abort(500);
	}

	public function show($code)
	{
		return view('pages.landing.permit.show', compact('code'));
	}

	public function print($code)
	{
		$permit = Permit::where('letter_code', $code)->firstOrFail();

		$pdf_preview = Pdf::loadView('pages.landing.permit.print', [
			'permit' => $permit,
			'ttd_pj' => basename($permit->ttd_pj),
			'ttd_officer' => basename($permit->ttd_officer),
		]);

		return $pdf_preview->stream();
	}
}
