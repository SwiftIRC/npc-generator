<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            ["gender", "male"],
            ["gender", "female"],
            ["gender", "non-binary"],
            ["name", "first"],
            ["name", "middle"],
            ["name", "last"],
            ["species", "human"],
            ["species", "dwarf"],
            ["species", "elf"],
        ];

        foreach ($attributes as $attribute) {
            Attribute::create(
                [
                    'name' => $attribute[0],
                    'value' => $attribute[1],
                ]
            );
        }
    }
}
