<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
	public function DashboardGuru()
	{
		return view('guru.dashboard.dashboard');
	}

	public function Absensi_hari()
	{
		return view('guru.absensi.hari-ini');
	}
}
