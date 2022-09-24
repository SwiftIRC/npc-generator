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
        $elf = Attribute::where('name', 'species')->where('value', 'elf')->first();
        $dwarf = Attribute::where('name', 'species')->where('value', 'dwarf')->first();

        $human_females = ["Kaylee", "Nera", "Reyanna"];
        $elven_females = [];
        $dwarven_females = ["Hundairgit", "Elrfoubelyn"];

        $human_males = ["Vauziath"];
        $elven_males = [];
        $dwarven_males = ["Travaran"];

        $human_nbs = [];
        $elven_nbs = [];
        $dwarven_nbs = [];

        $human_last = ["Parren", "Thuluthea"];
        $elven_last = ["Ilijor"];
        $dwarven_last = ["Hardchin", "Coaldelver"];
        

        foreach ($human_females as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $female->id,
                $human->id,
            ]);
        }

        foreach ($elven_females as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $female->id,
                $elf->id,
            ]);
        }

        foreach ($dwarven_females as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $female->id,
                $dwarf->id,
            ]);
        }

    }
}
