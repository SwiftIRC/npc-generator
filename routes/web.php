<?php

use App\Models\Name;
use Illuminate\Http\Request;
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

Route::get('/names', function () {
    $names = Name::all();

    foreach ($names as $name) {
        $name->attributes = $name->attributes()->get();
    }

    return response()->json(compact('names'));
});

Route::get('/', function (Request $request) {
    $species_options = Name::select('species')->groupBy('species')->pluck('species');

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

    $difficulty = random_int(1, 4);

    $faction = ["Northern", "Abundance", "Raigo", "Tigers", "Hillers"][random_int(0, 4)];

    return response()->json([
        "name" => $first_name->name . " " . $last_name->name,
        "species" => $species,
        "gender" => $first_name->gender,
        "faction" => $faction,
        "hitpoints" => random_int(1, 20) * $difficulty,
        "mana" => random_int(1, 20) * $difficulty,
        "thieving" => random_int(0, 7) * $difficulty,
        "fishing" => random_int(0, 7) * $difficulty,
        "mining" => random_int(0, 7) * $difficulty,
        "woodcutting" => random_int(0, 7) * $difficulty,
        "cooking" => random_int(0, 7) * $difficulty,
        "smithing" => random_int(0, 7) * $difficulty,
        "fletching" => random_int(0, 7) * $difficulty,
        "crafting" => random_int(0, 7) * $difficulty,
        "herblore" => random_int(0, 7) * $difficulty,
        "agility" => random_int(0, 7) * $difficulty,
        "farming" => random_int(0, 7) * $difficulty,
        "hunter" => random_int(0, 7) * $difficulty,
    ]);
});
