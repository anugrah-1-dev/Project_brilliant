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
	 * Print out the specified resource data from storage.
	 */
	public function download(Payment $payment)
	{
		// $path = public_path('/storage/images/payment/course/' . basename($payment->course_payment));
		// if (file_exists($path)) {
		// 	return response()->download($path);
		// }

		// return abort(404);

		if (Storage::disk('public')->exists($payment->course_payment)) {
			// dd($payment->course_payment);
			// Storage::download($payment->course_payment);
			$url = Storage::url('/images/payment/course/' . basename($payment->course_payment));
			return redirect($url);
		}

		return abort(404);
	}
}
