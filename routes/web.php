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

Route::get('/name', function () {
    $species = ["human", "dwarf", "elf"][random_int(0, 2)];
    $gender = ["male", "female", "non-binary"][random_int(0, 2)];

    $names = Name::all();
    $first_names = [];
    $last_names = [];

    foreach ($names as $name) {
        $name->attributes = $name->attributes()->get();
        $attributes = [];
        foreach ($name->attributes as $attribute) {
            $attributes[$attribute->name] = $attribute->value;
        }
        if ($attributes["species"] == $species) {
            if ($attributes["name"] == "first" && $attributes["gender"] == $gender) {
                array_push($first_names, $name->name);
            } elseif ($attributes["name"] == "last") {
                array_push($last_names, $name->name);
            }
        }
    }

    if (count($first_names)) {
        $first_name = $first_names[random_int(0, count($first_names) - 1)];
    } else {
        $first_name = "Alex";
    }

    $last_name = $last_names[random_int(0, count($last_names) - 1)];
    $name = $first_name . " " . $last_name;

    $npc = [
        "name" => $name,
        "species" => $species,
        "gender" => $gender,
    ];

    return response()->json($npc);
});
