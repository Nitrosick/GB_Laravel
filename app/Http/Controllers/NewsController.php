<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function newsByCategory(int $id)
    {
      $newsList = News::where('category_id', $id)
			  ->paginate(
				  config('news.paginate')
			);

      return view('news.index', [
          'newsList' => $newsList
      ]);
    }

    public function newsById(int $id)
    {
      $news = News::where('id', $id)->first();

      return view('news.single', [
          'news' => $news
      ]);
    }
}
