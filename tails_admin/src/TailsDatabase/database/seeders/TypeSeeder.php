<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name_type' => 'Fondation', 'id_category' => 1],
            ['name_type' => 'Blush', 'id_category' => 1],
            ['name_type' => 'Highlighter', 'id_category' => 1],
            ['name_type' => 'Mascara', 'id_category' => 2],
            ['name_type' => 'Eyeliner', 'id_category' => 2],
            ['name_type' => 'Eyeshadow', 'id_category' => 2],
            ['name_type' => 'Lipstick', 'id_category' => 3],
            ['name_type' => 'Gloss', 'id_category' => 3],
            ['name_type' => 'Pencil', 'id_category' => 3] 
        ];
        DB::table('types')->insert($types);
    }
}
