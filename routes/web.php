<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('home', [
        'name' => 'Farrel',
        'tugas' => 'tugas framework 1',
        'pak' => 'pak zaki'
    ]);
});

Route::get('/profile', function (){
    return view('profile',[
        'nama' => 'Farrel Gilang N.M',
        'nim' => '1201220022',
        'telp' => '081234311434'
    ]);
});

Route::get('/about', function (){
    return view('about',[
        'tugas' => 'tugas framework 1',
        'kelas' => 'kelas framework',
        'prodi' => 'RPL'
    ]);
});