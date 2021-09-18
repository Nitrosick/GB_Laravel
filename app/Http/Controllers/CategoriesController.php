<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(
                config('categories.paginate')
        );

        return view('categories.index', [
			'categoriesList' => $categories
 		]);
    }
}
