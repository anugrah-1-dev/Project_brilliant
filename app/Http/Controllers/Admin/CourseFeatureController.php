<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseFeature\StoreRequest;
use App\Models\Course;
use App\Models\CourseFeature;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CourseFeatureController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create(Course $course)
	{
		return view('pages.admin.courses.features.create', [
			'course' => $course,
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreRequest $request, Course $course)
	{
		$validated = $request->validated();

		$validated['course_id'] = $course->id;
		$validated['status'] = 'active';
		// dd($validated);
		$create = CourseFeature::create($validated);

		if ($create) {
			Alert::success('Berhasil', 'luaran program belajar berhasil ditambahkan');
			return redirect()->route('admin.courses.show', $course->slug);
		}

		return abort(500);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(CourseFeature $feature)
	{
		$feature->load(['course']);
		// dd($feature->course->slug);
		return view('pages.admin.courses.features.show', [
			'feature' => $feature,
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
	public function status(CourseFeature $feature)
	{
		$feature->load('course');

		if ($feature->status == 'active') {
			$feature->status = 'inactive';
			$feature->save();
			Alert::success('Berhasil', 'status berhasil diubah');
			return redirect()->route('admin.courses.show', $feature->course->slug);
		} else {
			$feature->status = 'active';
			$feature->save();
			Alert::success('Berhasil', 'status berhasil diubah');
			return redirect()->route('admin.courses.show', $feature->course->slug);
		}
	}
}
