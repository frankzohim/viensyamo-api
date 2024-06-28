<?php
use App\Events\DeleteAdsEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //dd("Hello");
    event(new DeleteAdsEvent());
    return view('welcome');
});

Route::get('/user', [CreateUserController::class, 'createUser']);
