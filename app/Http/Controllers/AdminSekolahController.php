<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminSekolah;

class AdminSekolahController extends Controller
{
    public function DashboardAdminSekolah()
	{
		return view('admin-sekolah.dashboard.dashboard');
	}
}
