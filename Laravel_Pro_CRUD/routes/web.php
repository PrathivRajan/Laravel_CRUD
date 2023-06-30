<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\IndividualProductionController;
use App\Http\Controllers\DashboardController;

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
Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::get('/login', function () { return view('auth.login');})->name('login');

Route::post('/login', [AuthController::class, 'handleLogin'])->name('handle.login');

Route::get('/logout', [AuthController::class, 'handleLogout'])->name('handle.logout');

Route::middleware(['auth'])->group(function () {

    Route::get('productions', [ProductionController::class, 'showProductions'])->name('show.productions');

    Route::post('productions}', [ProductionController::class, 'storeProduction'])->name('store.productions');

    Route::get('individual/productions', [IndividualProductionController::class, 'showIndividualProductions'])->name('show.individual.productions');

    Route::post('individual/productions', [IndividualProductionController::class, 'storeIndividualProductions'])->name('store.individual.productions');

    Route::get('production/change/status/{id}', [ProductionController::class, 'changestatus'])->name('production.change.status');

    Route::get('individual/production/change/status/{id}', [IndividualProductionController::class, 'changestatus'])->name('individual.production.change.status');

    Route::get('production/remove/{id}', [ProductionController::class, 'remove'])->name('production.remove');

    Route::get('individual/production/remove/{individual_production}', [IndividualProductionController::class, 'remove'])->name('individual.production.remove');

    Route::post('productions/{editproductionsdata?}', [ProductionController::class, 'editProduction'])->name('edit.productions');

    Route::post('edit/individual/productions/{editindividualproductionsdata?}', [IndividualProductionController::class, 'editIndividualProductions'])->name('edit.individual.productions');
});
