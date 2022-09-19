<?php

namespace Database\Seeders;

use App\Models\Name;
use App\Models\Attribute;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first_name = Attribute::where('name', 'name')->where('value', 'first')->first();
        $last_name = Attribute::where('name', 'name')->where('value', 'last')->first();

        $male = Attribute::where('name', 'gender')->where('value', 'male')->first();
        $female = Attribute::where('name', 'gender')->where('value', 'female')->first();
        $nb = Attribute::where('name', 'gender')->where('value', 'non-binary')->first();

        $human = Attribute::where('name', 'species')->where('value', 'human')->first();
        $dwarf = Attribute::where('name', 'species')->where('value', 'dwarf')->first();
        $elf = Attribute::where('name', 'species')->where('value', 'elf')->first();

        Name::create([
            'name' => "Kaylee",
        ])->attributes()->attach([
            $first_name->id,
            $female->id,
            $human->id,
        ]);

        Name::create([
            'name' => "Nera",
        ])->attributes()->attach([
            $first_name->id,
            $female->id,
            $human->id,
        ]);

        Name::create([
            'name' => "Hundairgit",
        ])->attributes()->attach([
            $first_name->id,
            $female->id,
            $dwarf->id,
        ]);

        Name::create([
            'name' => "Hardchin",
        ])->attributes()->attach([
            $last_name->id,
            $dwarf->id,
        ]);

        Name::create([
            'name' => "Elrfoubelyn",
        ])->attributes()->attach([
            $first_name->id,
            $female->id,
            $dwarf->id,
        ]);

        Name::create([
            'name' => "Coaldelver",
        ])->attributes()->attach([
            $last_name->id,
            $dwarf->id,
        ]);

        Name::create([
            'name' => "Travaran",
        ])->attributes()->attach([
            $first_name->id,
            $male->id,
            $elf->id,
        ]);

        Name::create([
            'name' => "Ilijor",
        ])->attributes()->attach([
            $last_name->id,
            $elf->id,
        ]);

        Name::create([
            'name' => "Reyanna",
        ])->attributes()->attach([
            $first_name->id,
            $female->id,
            $human->id,
        ]);

        Name::create([
            'name' => "Parren",
        ])->attributes()->attach([
            $last_name->id,
            $human->id,
        ]);

        Name::create([
            'name' => "Vauziath",
        ])->attributes()->attach([
            $first_name->id,
            $male->id,
            $human->id,
        ]);

        Name::create([
            'name' => "Thuluthea",
        ])->attributes()->attach([
            $last_name->id,
            $human->id,
        ]);
    }
}
