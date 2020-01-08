<?php

/////////////////////////////////////////////////////////// Logout
Route::get('/logout', 'LoginController@logout');



/////////////////////////////////////////////////////////// Login Guru
Route::get('/guru', 'LoginController@LoginGuru')
->name('LoginGuru')->middleware('guest');;
Route::post('/LoginGuru', 'LoginController@postLoginGuru');

/////////////////////////////////////////////////////////// Login Kepsek
Route::get('/kepsek', 'LoginController@LoginKepsek')
->name('LoginKepsek')->middleware('guest');
Route::post('/LoginKepsek', 'LoginController@postLoginKepsek');

/////////////////////////////////////////////////////////// Login Admin Sekolah
Route::get('/admin-sekolah', 'LoginController@LoginAdminSekolah')
->name('LoginAdminSekolah')->middleware('guest');
Route::post('/LoginAdminSekolah', 'LoginController@postLoginAdminSekolah');

/////////////////////////////////////////////////////////// Login Admin Kecamatan
Route::get('/admin-kecamatan', 'LoginController@LoginAdminKecamatan')
->name('LoginAdminKecamatan')->middleware('guest');
Route::post('/LoginAdminKecamatan', 'LoginController@postLoginAdminKecamatan');

/////////////////////////////////////////////////////////// Login Admin Dinas
Route::get('/admin-dinas', 'LoginController@LoginAdminDinas')
->name('LoginAdminDinas')->middleware('guest');
Route::post('/LoginAdminDinas', 'LoginController@postLoginAdminDinas');

/////////////////////////////////////////////////////////// Login Admin Master
Route::get('/admin-master', 'LoginController@LoginAdminMaster')
->name('LoginAdminMaster')->middleware('guest');
Route::post('/LoginAdminMaster', 'LoginController@postLoginAdminMaster');



///////////////////////////////////////////////////////////////////////////////// Guru
Route::get('/guru/dashboard', 'GuruController@DashboardGuru')
->name('DashboardGuru')->middleware('auth:guru');

///////////////////////////////////////////////////////////////////////////////// Kepsek
Route::get('/kepsek/dashboard', 'KepsekController@DashboardKepsek')
->name('DashboardKepsek')->middleware('auth:kepsek');

///////////////////////////////////////////////////////////////////////////////// Admin Sekolah
Route::get('/admin-sekolah/dashboard', 'AdminSekolahController@DashboardAdminSekolah')
->name('DashboardAdminSekolah')->middleware('auth:adminsekolah');

///////////////////////////////////////////////////////////////////////////////// Admin Kecamatan
Route::get('/admin-kecamatan/dashboard', 'AdminKecamatanController@DashboardAdminKecamatan')
->name('DashboardAdminKecamatan')->middleware('auth:adminkecamatan');

///////////////////////////////////////////////////////////////////////////////// Admin Dinas
Route::get('/admin-dinas/dashboard', 'AdminDinasController@DashboardAdminDinas')
->name('DashboardAdminDinas')->middleware('auth:admindinas');

///////////////////////////////////////////////////////////////////////////////// Admin Master
Route::get('/admin-master/dashboard', 'AdminMasterController@DashboardAdminMaster')
->name('DashboardAdminMaster')->middleware('auth:adminmaster');