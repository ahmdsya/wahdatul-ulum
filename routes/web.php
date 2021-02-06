<?php

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/artikel', 'Frontend\ArtikelController@artikelAll')->name('artikel.semua');
Route::get('/artikel/{bagian}', 'Frontend\ArtikelController@artikelByBagian')->name('artikel.bagian');
Route::get('/artikel/{id}/{judul}', 'Frontend\ArtikelController@artikelSingle')->name('artikel.single');
Route::get('/kata-sambutan/{id}', 'Frontend\KataSambutanController@index')->name('kata.sambutan');
Route::post('/cari', 'Frontend\PencarianController@cari')->name('cari');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');

Route::group(['prefix' => 'admin'], function(){
	Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
	Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
	Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');

	Route::get('/', 'Backend\AdminController@index')->name('admin.home');
	Route::resource('/bagian', 'Backend\BagianController');
	Route::resource('/artikel', 'Backend\ArtikelController');
	Route::resource('/kata-sambutan', 'Backend\KataSambutanController');
	Route::resource('/pengaturan', 'Backend\PengaturanController');
	Route::resource('/profil', 'Backend\ProfilController');
	Route::put('/ubah-password', 'Backend\ProfilController@updatePass')->name('ubah.password');
});
