<?php

use App\Http\Controllers\Exampole\FirstController as ExampoleFirstController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


// Route::get('/about',function(){
//    return redirect('/contact');    
// });
// Route::get('/profile', [ProfileController::class, 'edit']);
// Route::get('/contact/{id}',function($id){
//    return view('contact');
// });

// Route::view('/about', 'about');
// Route::get('/contact/{id}',function($id){
//    return view('contact');
// }); 

// Route::get('/country', function () {
//     return view('country');
// })->middleware('country');
// Route:view('/country','country');
Route::get('/contact',[FirstController::class, 'index']); 
Route::get('/about',[FirstController::class, 'about']);
//Route::post('/student-store',[FirstController::class, 'storee'])->name('student.store');
Route::post('/store/contact',[FirstController::class, 'store'])->name('store.contact');




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
