<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::middleware('auth:api')->prefix('v1')->group(function(){

    Route::get('/user',function(Request $request){

        return $request->user();
    });
    //Route::get('/authors/{author}',[\App\Http\Controllers\AuthorsController::class,'show']);
    //Route::get('/authors',[\App\Http\Controllers\AuthorsController::class,'index']);

    Route::apiResource('/authors',\App\Http\Controllers\AuthorsController::class);

    Route::apiResource('/publishers',\App\Http\Controllers\PublishersController::class);
    Route::apiResource('/addresses',\App\Http\Controllers\AddressesController::class);
});

Route::apiResource('/books',\App\Http\Controllers\BooksController::class);



//author/{id}
//for one specific


