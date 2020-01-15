<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class RedirectIfAuthenticated 
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @param  string|null  $guard
   * @return mixed
   */
  public function handle($request, Closure $next, $guard = null)
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
    return $next($request);
  }
}