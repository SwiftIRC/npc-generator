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

        $human_females = ["Emilia", "Kaela", "Kaylee", "Nera", "Reyanna"];
        $elven_females = ["Renna"];
        $dwarven_females = ["Hundairgit", "Elrfoubelyn"];

        $human_males = ["Angegisis", "Agilbert", "Corey", "Jackson", "Prime", "Sebastian", "Vauziath"];
        $elven_males = [];
        $dwarven_males = ["Travaran"];

        $human_nbs = [];
        $elven_nbs = ["Vulmon"];
        $dwarven_nbs = [];

        $human_last = ["Bates", "Chapmyre", "Connington", "Knotwise", "Lothran", "Path", "Parren", "Sutton", "Thuluthea", "Walker"];
        $elven_last = ["Balstina", "Ilijor", "Loramys"];
        $dwarven_last = ["Hardchin", "Coaldelver"];

        # Females

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

        # Males

        foreach ($human_males as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $male->id,
                $human->id,
            ]);
        }

        foreach ($elven_males as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $male->id,
                $elf->id,
            ]);
        }

        foreach ($dwarven_males as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $male->id,
                $dwarf->id,
            ]);
        }

        # NBs

        foreach ($human_nbs as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $nb->id,
                $human->id,
            ]);
        }

        foreach ($elven_nbs as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $nb->id,
                $elf->id,
            ]);
        }

        foreach ($dwarven_nbs as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $nb->id,
                $dwarf->id,
            ]);
        }

        # Last Names

        foreach ($human_last as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $last_name->id,
                $human->id,
            ]);
        }

        foreach ($elven_last as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $last_name->id,
                $elf->id,
            ]);
        }

        foreach ($dwarven_last as $name) {
            Name::create([
                'name' => $name,
            ])->attributes()->attach([
                $first_name->id,
                $last_name->id,
                $dwarf->id,
            ]);
        }

    }
}
