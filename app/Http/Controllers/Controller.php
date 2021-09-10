<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Faker\Factory;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategories(): array
    {
        return [
            ['id' => 1, 'name' => 'Sport'],
            ['id' => 2, 'name' => 'Culture'],
            ['id' => 3, 'name' => 'Technologies'],
            ['id' => 4, 'name' => 'Education'],
            ['id' => 5, 'name' => 'Medicine'],
        ];
    }

    protected function getNews(): array
    {
        $faker = Factory::create('en_EN');
        $result = [];
        $counter = 1;

        foreach ($this->getCategories() as $value) {
            for ($i = 0; $i < 4; $i++) {
                $result[] = [
                    'id' => $counter,
                    'category_id' => $value['id'],
                    'title' => $faker->jobTitle(),
                    'description' => $faker->sentence(30),
                    'short' => $faker->sentence(5),
                    'author' => $faker->name(),
                    'created_at' => now()
                ];
                $counter++;
            }
        }

        return $result;
    }

    protected function getNewsById($id): array
    {
        foreach ($this->getNews() as $value) {
            if ($value['id'] === $id) return $value;
        }
    }
}
