<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsByCategory(int $id)
    {
        $allNews = $this->getNews();
        $news = [];

        foreach ($allNews as $value) {
            if ($value['category_id'] === $id) {
                $news[] = $value;
            }
        }

        return view('news.by_cat', [
            'news' => $news
        ]);
    }

    public function newsById(int $id)
    {
        $result = $this->getNewsById($id);

        return view('news.single', [
            'news' => $result
        ]);
    }

    public function addNews()
    {
        return view('news.add');
    }
}
