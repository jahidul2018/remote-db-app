<?php

use App\Http\Controllers\TiplistController;
use Illuminate\Support\Facades\DB;
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

Route::get('/datatable', [TiplistController::class, 'index'])->name('remote.index');
Route::get('/show', [TiplistController::class, 'syncTable'])->name('remote.show');

Route::get('/db', function () {
    $users = DB::table('tiplist')->select('ip', 'isp', 'status', 'allow_latency', 'avg_latency', 'sysdt')->get();

    return $users;
});
