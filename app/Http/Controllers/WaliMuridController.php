<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WaliMurid;

class WaliMuridController extends Controller
{
	public function DashboardWaliMurid()
	{
		return view('wali-murid.dashboard.dashboard');
	}
}
