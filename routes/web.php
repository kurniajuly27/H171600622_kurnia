<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::any('login', function() {
    if (request()->getMethod() == 'POST') {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            echo '<p style="color: #ff0000;">Incorrect!</p>';
        } else {
            echo '<p style="color: #00ff30;">Matched :)</p>';
        }
    }

    $form = '<form method="post" action="captcha-test">';
    $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    $form .= '<p>' . captcha_img() . '</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';
    return $form;
});


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('kategori_artikel');

Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('Kategori_Berita');

Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('Kategori_Galeri');

Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('Kategori_Pengumuman');
Route::get('/artikel', 'ArtikelController@index')->name('Artikel.index');
Route::get('/berita', 'BeritaController@index')->name('Berita.index');
Route::get('/galeri', 'GaleriController@index')->name('Galeri.index');
Route::get('/pengumuman', 'PengumumanController@index')->name('Pengumuman.index');

Route::get('login', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('login', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');