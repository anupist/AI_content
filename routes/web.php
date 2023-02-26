<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;

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

Route::get('/writer', function () {
    $title = '';
    $content = '';
    return view('writer', compact('title', 'content'));
});    

Route::post('/writer/generate', [WriterController::class, 'index']);
