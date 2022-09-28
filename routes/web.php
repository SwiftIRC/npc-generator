<?php

use App\Models\Name;
use Illuminate\Http\Request;
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

Route::get('/names', function () {
    $names = Name::all();

    foreach ($names as $name) {
        $name->attributes = $name->attributes()->get();
    }

    return response()->json(compact('names'));
});

Route::get('/name', function (Request $request) {

    $species_options = Name::select('species')->groupBy('species')->get()->pluck('species');

    $species = $request->get('species', $species_options->random());
    $gender = $request->get('gender', null);

    $first_name = Name::when($gender, function ($query, $gender) {
        $query->where('gender', $gender);
    }, function ($query) {
        $query->whereNotNull('gender');
    })
        ->where('species', $species)
        ->inRandomOrder()
        ->firstOrFail();

    $last_name = Name::whereNull('gender')->where('species', $species)->inRandomOrder()->firstOrFail();

    return response()->json([
        "name" => $first_name->name . " " . $last_name->name,
        "species" => $species,
        "gender" => $first_name->gender,
    ]);
});
