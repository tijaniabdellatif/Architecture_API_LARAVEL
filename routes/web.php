<?php

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


Route::get('/user', function(){


    $users = \App\Models\User::all();

   return view('users.index',compact('users'));

});

Route::get('/user/show',[\App\Http\Controllers\AddressesController::class,'show']);

Route::get('/address/print',function (){

      $addresses = \App\Models\Address::with('owner')->get();
      return view('address.index',compact('addresses'));
});
