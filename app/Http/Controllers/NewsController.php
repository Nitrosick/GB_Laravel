<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function newsByCategory(int $id)
    {
        $model = new News();

        return view('news.index', [
			'newsList' => $model->getNewsByCat($id)
		]);
    }

    public function newsById(int $id)
    {
        $model = new News();

        return view('news.single', [
			'news' => $model->getNewsById($id)
		]);
    }
}
