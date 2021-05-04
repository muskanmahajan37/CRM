<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Prospects\Activities\ProspectActivitiesController;
use App\Http\Controllers\Admin\Prospects\ProspectsController;
use App\Http\Controllers\Admin\Prospects\ProspectContactsController;
use App\Http\Controllers\Admin\Prospects\ProspectDashboardController;
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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('prospects')->middleware('auth')->name('admin.prospects.')->group(base_path('routes/web/prospects.php'));


Route::get('/create', function () {
    return view('admin.prospects.activities.create');
})->name('create');

Route::get('/index', function () {
    return view('admin.prospects.activities.index');
})->name('index');

Route::get('/show', function () {
    return view('admin.prospects.activities.show');
})->name('show');

Route::get('/edit-contact-form', function () {
    return view('admin.prospects.contacts.partials.edit-contact-form');
})->name('edit-contact-form');

Route::get('/create1', function () {
    return view('admin.prospects.contacts.create');
})->name('create1');

Route::get('/prospect-card', function () {
    return view('admin.prospects.partials.prospect-card');
})->name('prospect-card');

Route::get('/index1', function () {
    return view('admin.prospects.prospect.index');
})->name('index1');

Route::get('/create2', function () {
    return view('admin.prospects.create');
})->name('create2');

Route::get('/edit', function () {
    return view('admin.prospects.edit');
})->name('edit');



Route::get('/index2', function () {
    return view('admin.prospects.index');
})->name('index2');