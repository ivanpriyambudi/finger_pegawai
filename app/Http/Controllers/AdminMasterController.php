<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminMaster;

class AdminMasterController extends Controller
{
    public function DashboardAdminMaster()
	{
		return view('admin-master.dashboard.dashboard');
	}
}
