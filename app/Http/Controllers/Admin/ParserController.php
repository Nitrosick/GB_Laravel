<?php

namespace App\Http\Controllers\Admin;

use App\Contract\Parser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Parser $service)
    {
        $result = $service->parse('https://news.yandex.ru/games.rss');

        foreach ($result['news'] as $value) {
            DB::insert("insert into out_news (title, link, guid, description)
                        values ('{$value['title']}', '{$value['link']}', '{$value['guid']}', '{$value['description']}')");
        }

        return redirect()->route('admin.news.index');
    }
}
