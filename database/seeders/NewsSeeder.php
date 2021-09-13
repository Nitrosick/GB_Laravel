<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(): array
	{
		$faker = Factory::create('en_EN');
		$data = [];

        for ($i = 1; $i <= 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                $data[] = [
                    'category_id' => $i,
                    'source_id' => mt_rand(1, 10),
                    'title' => $faker->jobTitle(),
                    'author' => $faker->lastName(),
                    'description' => $faker->text(mt_rand(500, 1000)),
                    'short' => $faker->text(mt_rand(100, 200)),
                    'updated_at' => now(),
                    'created_at' => now()
                ];
            }
        }

		return $data;
	}
}
