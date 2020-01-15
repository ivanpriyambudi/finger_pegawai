<?php
namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
class Authenticate extends Middleware
{
  /**
   * Get the path the user should be redirected to when they are not authenticated.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return string
   */
  protected function redirectTo($request)
  {
    if (Auth::guard('guru')->check()) {
      return redirect('/guru/dashboard');

    } else if (Auth::guard('walimurid')->check()) {
      return redirect('/wali-murid/dashboard');
      
    } else if (Auth::guard('adminsekolah')->check()) {
      return redirect('/adminsekolah/dashboard');
      
    } else if (Auth::guard('adminkecamatan')->check()) {
      return redirect('/adminkecamatan/dashboard');
      
    } else if (Auth::guard('admindinas')->check()) {
      return redirect('/admindinas/dashboard');
      
    } else if (Auth::guard('adminmaster')->check()) {
      return redirect('/adminmaster/dashboard');
      
    } else if (Auth::guard('siswa')->check()) {
      return redirect('/siswa/dashboard');
      
    }
  }
}