<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminSekolah;
use App\Guru;
use Auth;


class AdminSekolahController extends Controller
{
	public function DashboardAdminSekolah()
	{
		return view('admin-sekolah.dashboard.dashboard');
	}

	public function AdminSekolah_TabelGuru()
	{
		$guru = Guru::all();

		return view('admin-sekolah.guru.tabel-guru',compact('guru'));
	}

	public function Delete_Guru($id)
	{
		$model=Guru::find($id);
		$model->delete();

		return redirect()->route('AdminSekolahTabelGuru');
	}
}
