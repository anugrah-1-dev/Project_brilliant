<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('pages.admin.payments.index', [
			'payments' => Payment::with(['student', 'course', 'period', 'bank'])->get(),
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Payment $payment)
	{
		$payment->load(['student', 'course', 'period', 'transport', 'bank']);

		return view('pages.admin.payments.show', [
			'payment' => $payment,
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		//
	}

	/**
	 * Print out the specified resource data from storage.
	 */
	public function print(Payment $payment)
	{
		$payment->load(['student', 'course', 'period', 'transport', 'bank']);

		return view('pages.admin.payments.print', [
			'payment' => $payment
		]);
	}

	/**
	 * Download out the specified resource data from storage.
	 */
	public function download(Payment $payment, $type = 'course')
	{
		$path = $type === 'transport' ? $payment->transport_payment : $payment->course_payment;

		if (!$path) {
			return abort(404, 'File path not found in database.');
		}

		// Try multiple possible paths to handle old and new upload structures
		$possiblePaths = [
			$path,
			'payment/' . $type . '/' . basename($path),
			'images/payment/' . $type . '/' . basename($path),
			'public/payment/' . $type . '/' . basename($path),
		];

		foreach ($possiblePaths as $possiblePath) {
			if (Storage::disk('public')->exists($possiblePath)) {
				return Storage::disk('public')->download($possiblePath);
			}
		}

		return abort(404, 'File not found on server.');
	}
}
