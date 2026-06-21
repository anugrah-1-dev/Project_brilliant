<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LiveTourController extends Controller
{
	// Brilliant
	public function home()
	{
		return view('pages.landing.livetours.home');
	}

	public function hall()
	{
		return view('pages.landing.livetours.hall');
	}

	public function classroom()
	{
		return view('pages.landing.livetours.classroom');
	}

	// Asrama
	public function reguler()
	{
		return view('pages.landing.livetours.dorms.reguler');
	}

	public function homestay()
	{
		return view('pages.landing.livetours.dorms.homestay');
	}

	public function vip()
	{
		return view('pages.landing.livetours.dorms.vip');
	}
}
