<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminDinas;


class AdminDinasController extends Controller
{
    public function DashboardAdminDinas()
	{
		return view('admin-dinas.dashboard.dashboard');
	}
}
