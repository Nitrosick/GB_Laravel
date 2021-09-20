<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsList = News::with('category')
			->paginate(10);

        return view('admin.news.index', [
            'newsList' => $newsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.news.create', [
			'categories' => $categories
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
			'title' => ['required', 'string', 'min:5'],
			'author' => ['required', 'string', 'min:3'],
			'description' => ['required', 'string', 'min:10'],
            'short' => ['required', 'string', 'min:10']
		]);

        $news = News::create(
			$request->only(['category_id', 'title', 'author', 'description'])
		);

		if($news) {
			return redirect()
				->route('admin.news.index')
				->with('success', 'The entry was successfully added');
		}

		return back()
			->with('error', 'Error when adding an entry')
			->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories =  Category::all();

        return view('admin.news.edit', [
			'news' => $news,
			'categories' => $categories
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param News $news
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
			'title' => ['required', 'string', 'min:5'],
			'author' => ['required', 'string', 'min:3'],
			'description' => ['required', 'string', 'min:10']
		]);

        $news = $news->fill(
			$request->only(['category_id', 'title', 'author', 'description'])
		)->save();

		if($news) {
			return redirect()
				->route('admin.news.index')
				->with('success', 'The entry was successfully updated');
		}

		return back()
			->with('error', 'Error when updating an entry')
			->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, News $news)
    {
        if($request->ajax()) {
            try {
                $news->delete();
                return response()->json(['message' => 'success']);

            } catch (\Exception $e) {
                Log::error("Error delete news" . PHP_EOL, [$e]);
                return response()->json(['message' => 'error'], 400);
            }
        }
    }
}
