<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PestController;

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

// globalelectro.test
// .com => welcome
// .com => contact
// .com => blog

/*
$posts = [
        ['title' => 'First post'],
        ['title' => 'Second post'],
        ['title' => 'Third post'],
        ['title' => 'Fourth post']
    ];

    return view('blog', ['posts' => $posts]);

*/
//Route::get('/', function () {return view('welcome');});




Route::view('/','welcome')->name('welcome');
Route::get('/blog', [PestController::class, 'index'])->name('blog');
Route::view('/contacto','contac')->name('contacto');
Route::view('/aboutme','about')->name('acercademifijo');