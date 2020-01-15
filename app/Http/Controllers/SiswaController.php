<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function DashboardSiswa()
	{
		return view('siswa.dashboard.dashboard');
	}
}
