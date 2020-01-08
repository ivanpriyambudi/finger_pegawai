<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminKecamatan;

class AdminKecamatanController extends Controller
{
    public function DashboardAdminKecamatan()
	{
		return view('admin-kecamatan.dashboard.dashboard');
	}
}
