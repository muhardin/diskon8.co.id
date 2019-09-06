<?php

use Illuminate\Database\Seeder;
use App\ResellerPackage;

class ResellerPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        ResellerPackage::insert([
            'title' => 'Silver',
            'price' => 100000,
            'description_price' => 'Silver ini blablabla',
            'maximum_product_sale' => 110000,
            'minimum_price_sale' => 50000,
            'other_rule' => 'please',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        ResellerPackage::insert([
            'title' => 'Gold',
            'price' => 200000,
            'description_price' => 'Gold ini blablabla',
            'maximum_product_sale' => 120000,
            'minimum_price_sale' => 70000,
            'other_rule' => 'gold',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        ResellerPackage::insert([
            'title' => 'Onyx',
            'price' => 300000,
            'description_price' => 'Gold ini blablabla',
            'maximum_product_sale' => 120000,
            'minimum_price_sale' => 70000,
            'other_rule' => 'gold',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        ResellerPackage::insert([
            'title' => 'Diamond',
            'price' => 400000,
            'description_price' => 'Gold ini blablabla',
            'maximum_product_sale' => 120000,
            'minimum_price_sale' => 70000,
            'other_rule' => 'gold',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
