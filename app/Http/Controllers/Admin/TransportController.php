<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Transport\StoreRequest;
use App\Models\Transport;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransportController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('pages.admin.transports.index', [
			'tranports' => Transport::all(),
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('pages.admin.transports.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreRequest $request)
	{
		$validated = $request->validated();

		$validated['status'] = 'active';

		$create = Transport::create($validated);

		if ($create) {
			Alert::success('Berhasil', 'akomodasi berhasil ditambahkan');
			return redirect()->route('admin.transports.index');
		}

		return abort(500);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Transport $transport)
	{
		return view('pages.admin.transports.show', [
			'transport' => $transport,
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
	 * Update the specified resource status in storage.
	 */
	public function status(Transport $transport)
	{
		if ($transport->status == 'active') {
			$transport->status = 'inactive';
			$transport->save();
			Alert::success('Berhasil', 'status berhasil diubah');
			return redirect()->route('admin.transports.show', $transport);
		} else {
			$transport->status = 'active';
			$transport->save();
			Alert::success('Berhasil', 'status berhasil diubah');
			return redirect()->route('admin.transports.show', $transport);
		}
	}
}
