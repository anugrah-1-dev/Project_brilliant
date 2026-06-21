<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreRequest;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('pages.admin.courses.index', [
			'courses' => Course::with('features')->get(),
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('pages.admin.courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreRequest $request)
	{
		$validated = $request->validated();

		$validated['slug'] = Str::slug($validated['name']) . '-' . Str::lower(Str::random(5));
		$validated['status'] = 'active';

		$create = Course::create($validated);

		if ($create) {
			Alert::success('Berhasil', 'program belajar berhasil ditambahkan');
			return redirect()->route('admin.courses.index')->with('success', 'program belajar berhasil ditambahkan.');
		}

		return abort(500);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $slug)
	{
		return view('pages.admin.courses.show', [
			'course' => Course::with('features')->where('slug', $slug)->firstOrFail(),
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
	public function status(Course $course)
	{
		if ($course->status == 'active') {
			$course->status = 'inactive';
			$course->save();
			Alert::success('Berhasil', 'status berhasil diubah');
			return redirect()->route('admin.courses.index');
		} else {
			$course->status = 'active';
			$course->save();
			Alert::success('Berhasil', 'status berhasil diubah');
			return redirect()->route('admin.courses.index');
		}
	}
}
