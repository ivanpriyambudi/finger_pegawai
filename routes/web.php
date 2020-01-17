<?php

//---------------------------------------------------------------------------------// Logout
Route::get('/logout', 'LoginController@logout');

//---------------------------------------------------------------------------------// Login Siswa
Route::get('/siswa', 'LoginController@LoginSiswa')
->name('LoginSiswa')->middleware('guest');;
Route::post('/LoginSiswa', 'LoginController@postLoginSiswa');

//---------------------------------------------------------------------------------// Login Guru
Route::get('/guru', 'LoginController@LoginGuru')
->name('LoginGuru')->middleware('guest');;
Route::post('/LoginGuru', 'LoginController@postLoginGuru');

//---------------------------------------------------------------------------------// Login Wali Murid
Route::get('/wali-murid', 'LoginController@LoginWaliMurid')
->name('LoginWaliMurid')->middleware('guest');
Route::post('/LoginWaliMurid', 'LoginController@postLoginWaliMurid');

//---------------------------------------------------------------------------------// Login Admin Sekolah
Route::get('/admin-sekolah', 'LoginController@LoginAdminSekolah')
->name('LoginAdminSekolah')->middleware('guest');
Route::post('/LoginAdminSekolah', 'LoginController@postLoginAdminSekolah');

//---------------------------------------------------------------------------------// Login Admin Kecamatan
Route::get('/admin-kecamatan', 'LoginController@LoginAdminKecamatan')
->name('LoginAdminKecamatan')->middleware('guest');
Route::post('/LoginAdminKecamatan', 'LoginController@postLoginAdminKecamatan');

//---------------------------------------------------------------------------------// Login Admin Dinas
Route::get('/admin-dinas', 'LoginController@LoginAdminDinas')
->name('LoginAdminDinas')->middleware('guest');
Route::post('/LoginAdminDinas', 'LoginController@postLoginAdminDinas');

//---------------------------------------------------------------------------------// Login Admin Master
Route::get('/admin-master', 'LoginController@LoginAdminMaster')
->name('LoginAdminMaster')->middleware('guest');
Route::post('/LoginAdminMaster', 'LoginController@postLoginAdminMaster');


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//---------------------------------------------------------------------------------// Siswa
Route::get('/siswa/dashboard', 'SiswaController@DashboardSiswa')
->name('DashboardSiswa')->middleware('auth:siswa');

//---------------------------------------------------------------------------------// Guru 
Route::get('/guru/dashboard', 'GuruController@DashboardGuru')
->name('DashboardGuru')->middleware('auth:guru');

Route::get('/guru/absensi-hari-ini', 'GuruController@Absensi_hari')
->name('AbsensiHariIni')->middleware('auth:guru');

Route::get('/guru/absensi-rekap', 'GuruController@Absensi_rekap')
->name('AbsensiRekap')->middleware('auth:guru');

Route::get('/guru/absensi-izin', 'GuruController@Absensi_izin')
->name('AbsensiIzin')->middleware('auth:guru');

Route::get('/guru/profile', 'GuruController@Profile_guru')
->name('ProfileGuru')->middleware('auth:guru');

Route::get('/guru/notif', 'GuruController@Profile_notif')
->name('NotifGuru')->middleware('auth:guru');
//--------------------------------------------------------// Wali Kelas 
Route::get('/guru/siswa/tabel', 'GuruController@WaliKelas_siswa_tabel')
->name('TabelSiswaGuru')->middleware('auth:guru');

Route::get('/guru/siswa/absensi-hari-ini', 'GuruController@WaliKelas_siswa_hari')
->name('AbsensiHariIniSiswa')->middleware('auth:guru');

//---------------------------------------------------------------------------------// Wali Murid
Route::get('/wali-murid/dashboard', 'WaliMuridController@DashboardWaliMurid')
->name('DashboardWaliMurid')->middleware('auth:walimurid');

//---------------------------------------------------------------------------------// Admin Sekolah
Route::get('/admin-sekolah/dashboard', 'AdminSekolahController@DashboardAdminSekolah')
->name('DashboardAdminSekolah')->middleware('auth:adminsekolah');

//---------------------------------------------------------------------------------// Admin Kecamatan
Route::get('/admin-kecamatan/dashboard', 'AdminKecamatanController@DashboardAdminKecamatan')
->name('DashboardAdminKecamatan')->middleware('auth:adminkecamatan');

//---------------------------------------------------------------------------------// Admin Dinas
Route::get('/admin-dinas/dashboard', 'AdminDinasController@DashboardAdminDinas')
->name('DashboardAdminDinas')->middleware('auth:admindinas');

//---------------------------------------------------------------------------------// Admin Master
Route::get('/admin-master/dashboard', 'AdminMasterController@DashboardAdminMaster')
->name('DashboardAdminMaster')->middleware('auth:adminmaster');