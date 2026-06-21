<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Period\StoreRequest;
use App\Models\Period;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PeriodController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('pages.admin.periods.index', [
			'periods' => Period::all(),
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('pages.admin.periods.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreRequest $request)
	{
		$validated = $request->validated();

		$create = Period::create($validated);

		if ($create) {
			Alert::success('Berhasil', 'periode berhasil ditambahkan');
			return redirect()->route('admin.periods.index');
		}

		return abort(500);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		//
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
}
