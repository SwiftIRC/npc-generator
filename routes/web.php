<?php

use App\Models\Name;
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

Route::get('/names', function () {
    $names = Name::all();

    foreach ($names as $name) {
        $name->attributes = $name->attributes()->get();
    }

    return response()->json(compact('names'));
});
