<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $title = $faker->word;
            Product::insert([
                'name' => $title,
                'slug' => Str::slug($title),
                'brand' => $faker->word,
                'agent_price' => $faker->randomNumber(5),
                'selling_price' => $faker->randomNumber(5),
                'profit' => $faker->randomNumber(3),
                'discount' => $faker->randomNumber(2),
                'weight' => $faker->randomNumber(2),
                'unit' => 'pcs',
                'description' => $faker->text,
                'main_image' => $faker->image('/tmp', 640, 480),
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
