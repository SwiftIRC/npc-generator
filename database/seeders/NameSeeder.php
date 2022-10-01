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
        $human_females = ["Emilia", "Kaela", "Kaylee", "Maya", "Melody", "Nera", "Reyanna"];
        $elven_females = ["Renna"];
        $dwarven_females = ["Aden", "Admina", "Afra", "Agran", "Amethyst", "Avil", "Bari", "Barol", "Bavol", "Bhelkam", "Bjarki", "Bofar", "Bramdahr", "Branmand", "Brynjolvur", "Calgrima", "Calona", "Calund", "Chalia", "Chalia", "Cosette", "Crystal", "Dellinger", "Demeter", "Dhara", "Dila", "Dilgli", "Dithin", "Dodur", "Dolana", "Dora", "Dorola", "Dovana", "Dovli", "Dradir", "Dravan", "Dugrona", "Dunora", "Eartha", "Ebgran", "Edmundur", "Eiki", "Eilivur", "Ela", "Elindur", "Elrfoubelyn", "Emorette", "Erla", "Esmeralda", "Fiden", "Flintheart", "Gagon", "Gavil", "Gimli", "Giva", "Givur", "Hundairgit", "Jade", "Lana", "Lazuli", "Malvan", "Montana", "Narvi", "Randon", "Rarona", "Reginn", "Rudli", "Rundir", "Sapphire", "Sienna", "Thortor", "Thovir", "Thovir", "Ula"];

        $human_males = ["Angegisis", "Agilbert", "Cayde", "Corey", "Jackson", "Prime", "Sebastian", "Vauziath"];
        $elven_males = [];
        $dwarven_males = ["Addanc", "Aigror", "Algir", "Anil", "Anin", "Anvari", "Argos", "Ari", "Avion", "Baglia", "Bagrna", "Ballin", "Balthrasir", "Bamira", "Bargun", "Bashful", "Bavola", "Bes", "Bhalkyl", "Bhalmun", "Bharrom", "Bifur", "Bilbur", "Bofur", "Bombur", "Bothor", "Bovan", "Braka", "Bramdur", "Brand", "Brokk", "Buboth", "Calgak", "Calgrima", "Chalona", "Chirysaor", "Cola", "Danil", "Daremrun", "Divira", "Dogrila", "Dondna", "Dopey", "Dori", "Dothura", "Dragrola", "Dramola", "Draupin", "Duvur", "Dwomnaed", "Ebdrus", "Fimbul", "Firguc", "Galvon", "Gandalf", "Gidel", "Gim", "Gloin", "Glorgil", "Goliath", "Grumpy", "Hannar", "Happy", "Huffie", "Kibil", "Kili", "Malgon", "Malvon", "Nori", "Oin", "Onfroi", "Ruvon", "Sneezy", "Thondin", "Titan", "Travaran", "Wade"];

        $human_nbs = ["Alex"];
        $elven_nbs = ["Vulmon"];
        $dwarven_nbs = [];

        $human_last = ["Bates", "Chapmyre", "Connington", "Falker", "Knotwise", "Lothran", "Path", "Parren", "Sutton", "Thuluthea", "Walker", "Wilkinson", "White"];
        $elven_last = ["Balstina", "Ilijor", "Loramys"];
        $dwarven_last = ["Axe", "Coaldelver", "Deepgrip", "Flintcoat", "Hardchin", "Keghood", "Minebrow", "Runebreaker"];

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
