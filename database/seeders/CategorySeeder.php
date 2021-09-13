<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
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
        DB::table('categories')->insert($this->getData());
    }

    private function getData(): array
	{
		$faker = Factory::create('en_EN');
		$data = [
            ['title' => 'Sport', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Culture', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Technologies', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Education', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Medicine', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Science', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Movies', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Videogames', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Relax', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Future', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()]
        ];

		return $data;
	}
}
