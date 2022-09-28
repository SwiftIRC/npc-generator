<?php

namespace Database\Seeders;

use App\Models\Name;
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
        $human_females = ["Emilia", "Kaela", "Kaylee", "Melody", "Nera", "Reyanna"];
        $elven_females = ["Renna"];
        $dwarven_females = ["Hundairgit", "Elrfoubelyn"];

        $human_males = ["Angegisis", "Agilbert", "Corey", "Jackson", "Prime", "Sebastian", "Vauziath"];
        $elven_males = [];
        $dwarven_males = ["Travaran"];

        $human_nbs = ["Alex"];
        $elven_nbs = ["Vulmon"];
        $dwarven_nbs = [""];

        $human_last = ["Bates", "Chapmyre", "Connington", "Falker", "Knotwise", "Lothran", "Path", "Parren", "Sutton", "Thuluthea", "Walker"];
        $elven_last = ["Balstina", "Ilijor", "Loramys"];
        $dwarven_last = ["Hardchin", "Coaldelver"];

        # Females

        foreach ($human_females as $name) {
            Name::create([
                'name' => $name,
                'species' => 'human',
                'gender' => 'female',
            ]);
        }

        foreach ($elven_females as $name) {
            Name::create([
                'name' => $name,
                'species' => 'elf',
                'gender' => 'female',
            ]);
        }

        foreach ($dwarven_females as $name) {
            Name::create([
                'name' => $name,
                'species' => 'dwarf',
                'gender' => 'female',
            ]);
        }

        # Males

        foreach ($human_males as $name) {
            Name::create([
                'name' => $name,
                'species' => 'human',
                'gender' => 'male',
            ]);
        }

        foreach ($elven_males as $name) {
            Name::create([
                'name' => $name,
                'species' => 'elf',
                'gender' => 'male',
            ]);
        }

        foreach ($dwarven_males as $name) {
            Name::create([
                'name' => $name,
                'species' => 'dwarf',
                'gender' => 'male',
            ]);
        }

        # NBs

        foreach ($human_nbs as $name) {
            Name::create([
                'name' => $name,
                'species' => 'human',
                'gender' => 'non-binary',
            ]);
        }

        foreach ($elven_nbs as $name) {
            Name::create([
                'name' => $name,
                'species' => 'elf',
                'gender' => 'non-binary',
            ]);
        }

        foreach ($dwarven_nbs as $name) {
            Name::create([
                'name' => $name,
                'species' => 'dwarf',
                'gender' => 'non-binary',
            ]);
        }

        # Last Names

        foreach ($human_last as $name) {
            Name::create([
                'name' => $name,
                'species' => 'human',
            ]);
        }

        foreach ($elven_last as $name) {
            Name::create([
                'name' => $name,
                'species' => 'elf',
            ]);
        }

        foreach ($dwarven_last as $name) {
            Name::create([
                'name' => $name,
                'species' => 'dwarf',
            ]);
        }
    }
}
