<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'description' => $faker->text,
                'price' => $faker->randomFloat(2, 10, 1000),
                'oldPrice' => $faker->randomFloat(2, 10, 1000),
                'stock_quantity' => $faker->numberBetween(1, 1000),
                'category_id' => $faker->numberBetween(1,1),
                'image' => $faker->imageUrl(),
                'image_url' => $faker->url,
                'video' => $faker->word . '.mp4',
                'video_url' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
