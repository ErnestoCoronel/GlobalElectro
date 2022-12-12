<?php

use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PestController;
use App\Http\Controllers\RegisteredUserController;


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

Route::get('/blog', [PestController::class, 'index'])->name('posts.index');

Route::get('/blog/create', [PestController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('/blog', [PestController::class, 'store'])->name('posts.store');

Route::get('/blog/{post}/edit', [PestController::class, 'edit'])->name('posts.edit');
Route::patch('/blog/{post}', [PestController::class, 'update'])->name('posts.update');


Route::get('/blog/{post}', [PestController::class, 'show'])->name('posts.show');

Route::delete('/blog/{post}', [Pestcontroller::class, 'destroy'])->name('posts.destroy');

Route::view('/contacto','contac')->name('contacto');

Route::view('/aboutme','about')->name('acercademifijo');


Route::view('/register', 'auth.register')->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::view('/login', 'auth.login')->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::view('/empresa', 'entidad.empresa')->name('empresa');

Route::view('/sucursal', 'entidad.sucursal')->name('sucursal');

Route::view('/empleado', 'entidad.empleado')->name('empleado');

Route::get('/entidad/empleado', [PestController::class, 'crearformularioempleado'])->name('crear');
Route::post('/empleado', [PestController::class, 'store'])->name('empleado.store');
// Route::resource('blog', PestController::class, [
//        'names' => 'post',
//        'parameters' => ['blog' => 'post']
//]);