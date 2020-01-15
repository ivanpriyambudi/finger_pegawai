<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Kepsek;
use App\AdminSekolah;
use App\AdminKecamatan;
use App\AdminDinas;
use App\AdminMaster;
use Auth;

class LoginController extends Controller
{

  //---------------------------------------------------------------------------------// FrontEnd
  public function LoginGuru()
  {
    return view('guru.login');
  }

  public function LoginKepsek()
  {
    return view('kepsek.login');
  }

  public function LoginAdminSekolah()
  {
    return view('admin-sekolah.login');
  }

  public function LoginAdminKecamatan()
  {
    return view('admin-kecamatan.login');
  }

  public function LoginAdminDinas()
  {
    return view('admin-dinas.login');
  }

  public function LoginAdminMaster()
  {
    return view('admin-master.login');
  }

  //---------------------------------------------------------------------------------// Backend
  //---------------------------------------------------------------// Guru
  public function postLoginGuru(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'password' => 'required'
    ]);

    if (Auth::guard('guru')->attempt(['name' => $request->name, 'password' => $request->password])) {
      return redirect()->route('DashboardGuru');

    } else {
      return redirect()->route('LoginGuru');
    }
  }

  //---------------------------------------------------------------// Kepsek
  public function postLoginKepsek(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'password' => 'required'
    ]);

    if (Auth::guard('kepsek')->attempt(['name' => $request->name, 'password' => $request->password])) {
      return redirect()->route('DashboardKepsek');

    } else {
      return redirect()->route('LoginKepsek');
    }
  }

  //---------------------------------------------------------------// Admin Sekolah
  public function postLoginAdminSekolah(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'password' => 'required'
    ]);

    if (Auth::guard('adminsekolah')->attempt(['name' => $request->name, 'password' => $request->password])) {
      return redirect()->route('DashboardAdminSekolah');

    } else {
      return redirect()->route('LoginAdminSekolah');
    }
  }

  //---------------------------------------------------------------// Admin Kecamatan
  public function postLoginAdminKecamatan(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'password' => 'required'
    ]);

    if (Auth::guard('adminkecamatan')->attempt(['name' => $request->name, 'password' => $request->password])) {
      return redirect()->route('DashboardAdminKecamatan');

    } else {
      return redirect()->route('LoginAdminKecamatan');
    }
  }

  //---------------------------------------------------------------// Admin Dinas
  public function postLoginAdminDinas(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'password' => 'required'
    ]);

    if (Auth::guard('admindinas')->attempt(['name' => $request->name, 'password' => $request->password])) {
      return redirect()->route('DashboardAdminDinas');

    } else {
      return redirect()->route('LoginAdminDinas');
    }
  }

  //---------------------------------------------------------------// Admin Master
  public function postLoginAdminMaster(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'password' => 'required'
    ]);

    if (Auth::guard('adminmaster')->attempt(['name' => $request->name, 'password' => $request->password])) {
      return redirect()->route('DashboardAdminMaster');

    } else {
      return redirect()->route('LoginAdminMaster');
    }
  }


  //-------------------------------------------------------------------------------------// LogOut
  public function logout()
  {
    if (Auth::guard('guru')->check()) {
      Auth::guard('guru')->logout();

    } else if (Auth::guard('kepsek')->check()) {
      Auth::guard('kepsek')->logout();

    } else if (Auth::guard('adminsekolah')->check()) {
      Auth::guard('adminsekolah')->logout();

    } else if (Auth::guard('adminkecamatan')->check()) {
      Auth::guard('adminkecamatan')->logout();

    } else if (Auth::guard('admindinas')->check()) {
      Auth::guard('admindinas')->logout();

    } else if (Auth::guard('adminmaster')->check()) {
      Auth::guard('adminmaster')->logout();

    }
    return redirect('/');
  }

}