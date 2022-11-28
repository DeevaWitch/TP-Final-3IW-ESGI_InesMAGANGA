<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name_category' => 'Face'], // 1
            ['name_category' => 'Eyes'], // 2
            ['name_category' => 'Lips'] // 3
        ];
        DB::table('categories')->insert($categories);
    }
}
