<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('wcislinski/305421/people',[PeopleController::class, 'index']);
Route::get('wcislinski/305421/people/{people}',[PeopleController::class, 'show']);
Route::put('wcislinski/305421/people/{people}',[PeopleController::class, 'update']);
Route::delete('wcislinski/305421/people/{people}',[PeopleController::class, 'delete']);
Route::post('wcislinski/305421/people',[PeopleController::class, 'create']);
