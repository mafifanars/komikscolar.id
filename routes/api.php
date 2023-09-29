<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;

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

// Public Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::prefix('scolar/api')->controller(ApiController::class)->group(function () {
    Route::get('/user/token', 'getCsrfToken')->name('getToken');
    Route::get('/users', 'getAllUsers')->name('getAllUsers');
    Route::get('/user/{id}', 'getUser')->name('getUser');
    Route::get('/user/from/{email}', 'getUserFromEmail')->name('getUserFromEmail');
    Route::put('/user/login/update', 'changeLoginInfo')->name('changeLoginInfo');
    Route::put('/user/email-verify-at/update', 'verifyMail')->name('verifyMail');
    Route::put('/user/profile/update', 'updateProfile')->name("updateProfile");
    Route::put('/user/{id}/logout', 'logoutUser')->name('logoutUser');
    Route::post('/user/login', 'loginUser')->name('loginUser');
    Route::post('/user/create', 'createUser')->name('createUser');
    Route::delete('/user/{id}/delete', 'deleteUser')->name('deleteUser');
    Route::get('/mission', 'getMission')->name('getMission');
    Route::get('/mission/{id}', 'getMissionById')->name('getMissionById');
    Route::get('/mission-from-book/{book_id}', 'getMission')->name('getMission');
    Route::get('/question', 'getQuestion')->name('getQuestion');
    Route::get('/choice', 'getChoice')->name('getChoice');
    Route::get('/code-for-books', 'codeForBooks')->name('codeForBooks');
    Route::put('/code-for-books/change-used', 'codeForBooksChangeUsed')->name('codeForBooksChangeUsed');
    Route::put('/xp/user/update', 'updateXpUser')->name('updateXpUser');
    Route::put('/book/user/update', 'changeUserBook')->name('changeUserBook');
    Route::post('/send/email/test', 'sendMail')->name('sendMail');
});


// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
});

