<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('Home', [

        "title" => "Home"  
    ]);
});

Route::get('/about', function () {
    return view('About', [
        'title' => 'About', 
        'name' => 'Pieter Alvaro Bofianno',
        'ttl' => 'Denpasar, 27 Agustus 2001',
        'email' => 'pieteralvaro@upnyk.ac.id',
        'nomor' => '0812345678910',
        'alamat' => 'Jl. Melati Wetan 1 no.7 Eks.Kowilhan, Yogyakarta',
        'image' => 'saya.jpeg'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post}', [PostController::class, 'show'] );
