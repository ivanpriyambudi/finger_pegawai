<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
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

	//--------------------------------------------------------- Guru

	public function AdminSekolah_TabelGuru()
	{
		$guru = Guru::all();

		return view('admin-sekolah.guru.tabel-guru',compact('guru'));
	}

	public function AdminSekolah_GuruHariIni()
	{
		return view('admin-sekolah.guru.hari-ini');
	}

	public function AdminSekolah_RekapGuru()
	{
		return view('admin-sekolah.guru.rekap');
	}

	public function AdminSekolah_IzinGuru()
	{
		return view('admin-sekolah.guru.izin');
	}

	//--------------------------------------------------------- Siswa

	public function AdminSekolah_TabelSiswa()
	{
		return view('admin-sekolah.siswa.tabel-siswa');
	}

	public function AdminSekolah_SiswaHariIni()
	{
		return view('admin-sekolah.siswa.hari-ini');
	}

	public function AdminSekolah_RekapSiswa()
	{
		return view('admin-sekolah.siswa.rekap');
	}

	//--------------------------------------------------------- Wali Murid

	public function AdminSekolah_TabelWaliMurid()
	{
		return view('admin-sekolah.walimurid.tabel-walimurid');
	}

	// public function Delete_Guru($id)
	// {

	// 	$model=Guru::find($id);
	// 	$model->delete();

	// 	Alert::success('Success Title', 'Success Message');
	// }
}
