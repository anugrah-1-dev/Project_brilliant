<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bank\StoreRequest;
use App\Models\Bank;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BankController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('pages.admin.banks.index', [
			'banks' => Bank::all(),
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('pages.admin.banks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreRequest $request)
	{
		$validated = $request->validated();

		$validated['status'] = 'active';

		$create = Bank::create($validated);

		if ($create) {
			Alert::success('Berhasil', 'bank pembayaran berhasil ditambahkan');
			return redirect()->route('admin.banks.index');
		}

		return abort(500);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Bank $bank)
	{
		return view('pages.admin.banks.show', [
			'bank' => $bank,
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
	public function status(Bank $bank)
	{
		if ($bank->status == 'active') {
			$bank->status = 'inactive';
			$bank->save();
			Alert::success('Berhasil', 'status berhasil diubah');
			return redirect()->route('admin.banks.show', $bank);
		} else {
			$bank->status = 'active';
			$bank->save();
			Alert::success('Berhasil', 'status berhasil diubah');
			return redirect()->route('admin.banks.show', $bank);
		}
	}
}
