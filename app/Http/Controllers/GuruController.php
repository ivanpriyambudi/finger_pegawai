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

	public function Absensi_rekap()
	{
		return view('guru.absensi.rekap');
	}

	public function Absensi_izin()
	{
		return view('guru.absensi.izin');
	}

	public function Profile_guru()
	{
		return view('guru.profile.profile');
	}
}
