<?php

// use App\Http\Controllers\Auth\{
// 	LoginController,
// };
// use App\Http\Controllers\{
// 	HomeController,
// 	MenuController,
// 	ServidorController
// };
use Illuminate\Support\Facades\{
	Auth,
	Route
};

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

Auth::routes();

$namespace = "\App\Http\Controllers\\";
Route::get('/home', [$namespace . HomeController::class, 'index'])->name('home');

// require __DIR__.'/menu.php';
Route::group([
	// 'middleware' => 'api',
	// 'namespace' => 'Api',
	'prefix' => 'menus'
], function ($router) use ($namespace) {
	Route::get('/', [$namespace . MenuController::class, 'index'])->name('menus.index');
	Route::get('/{id}', [$namespace . MenuController::class, 'subindex'])->name('menus.subindex');
});
// Route::apiResource('menus', MenuController::class);

// require __DIR__.'/servidor.php';
Route::match(['get', 'post'], 'servidores/search', [$namespace . ServidorController::class, 'search'])->name('servidores.search');
Route::resource('servidores', ServidorController::class);
