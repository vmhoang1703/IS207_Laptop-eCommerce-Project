<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Thêm bản ghi cho danh mục "laptop"
        DB::table('categories')->insert([
            'category_id' => 1,
            'name' => 'laptop',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
