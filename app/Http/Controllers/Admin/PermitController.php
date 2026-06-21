<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PermitController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('pages.admin.permits.index', [
			'permits' => Permit::all(),
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
	public function show(Permit $permit)
	{
		return view('pages.admin.permits.show', [
			'permit' => Permit::where('id', $permit->id)->firstOrFail(),
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
	public function status(Permit $permit)
	{
		$permit->status = 'confirmed';
		$permit->save();
		Alert::success('Berhasil', 'status member berhasil diubah');
		return redirect()->route('admin.permits.index');
	}
}
