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
            ['title' => 'Auto', 'tag' => 'auto', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Autoracing', 'tag' => 'auto_racing', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Army', 'tag' => 'army', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Gatgets', 'tag' => 'gadgets', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Index', 'tag' => 'index', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Martial Arts', 'tag' => 'martial_arts', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Communal', 'tag' => 'communal', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Health', 'tag' => 'health', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Games', 'tag' => 'games', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Internet', 'tag' => 'internet', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Cybersport', 'tag' => 'cyber_sport', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Movies', 'tag' => 'movies', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Cosmos', 'tag' => 'cosmos', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Culture', 'tag' => 'culture', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Fire', 'tag' => 'fire', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Champions League', 'tag' => 'championsleague', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Music', 'tag' => 'music', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'NHL', 'tag' => 'nhl', 'description' => $faker->text(mt_rand(100, 300)), 'created_at' => now(), 'updated_at' => now()]
        ];

		return $data;
	}
}
