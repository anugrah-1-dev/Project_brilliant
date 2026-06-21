<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseFeature;
use Illuminate\Http\Request;

class LandingController extends Controller
{
	public function index()
	{
		return view('pages.landing.index', [
			'courses' => Course::with(['features'])->where('status', 'active')->get(),
			'features' => CourseFeature::where('status', 'active')->get(),
		]);
	}
}
