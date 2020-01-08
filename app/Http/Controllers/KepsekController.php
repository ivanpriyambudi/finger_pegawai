<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kepsek;

class KepsekController extends Controller
{
	public function DashboardKepsek()
	{
		return view('kepsek.dashboard.dashboard');
	}
}
