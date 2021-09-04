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

    protected function getCategories(): array
    {
        return [
            ['id' => 1, 'name' => 'Спорт'],
            ['id' => 2, 'name' => 'Культура'],
            ['id' => 3, 'name' => 'Технологии'],
            ['id' => 4, 'name' => 'Образование'],
            ['id' => 5, 'name' => 'Медицина'],
        ];
    }

    protected function getNews(): array
    {
        $faker = Factory::create('ru_RU');
        $result = [];
        $counter = 1;

        foreach ($this->getCategories() as $value) {
            for ($i = 0; $i < 4; $i++) {
                $result[] = [
                    'id' => $counter,
                    'category_id' => $value['id'],
                    'title' => $faker->jobTitle(),
                    'description' => $faker->sentence(20),
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
