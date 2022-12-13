<?php

use App\Models\Showroom;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowroomController;

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
    return view('home-adnan');
});

Route::get('/login', [UserController::class, 'login']);

Route::get('/register', [UserController::class, 'register']);

Route::get('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'auth']);

Route::post('/register', [UserController::class, 'store']);

Route::post('/add', [ShowroomController::class, 'add']);




Route::get('/listcar', function () {
    $list = Showroom::where('user_id', auth()->user()->id)->get();
    if (count($list) == 0) {
        return redirect('/addcar');
    }
    return view('listcar-adnan', [
        'list' => $list,
    ]);;
});
Route::get('/addcar', function () {
    return view('add-adnan');
});
