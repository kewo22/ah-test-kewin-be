<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::resource('students', StudentController::class);

Route::middleware(['cors'])->get('students', [StudentController::class, 'index']);
Route::middleware(['cors'])->post('/students', [StudentController::class, 'store']);
Route::middleware(['cors'])->get('students/{user}', [StudentController::class, 'show']);
Route::middleware(['cors'])->put('students/{user}', [StudentController::class, 'update']);
Route::middleware(['cors'])->delete('students/{user}', [StudentController::class, 'destroy']);