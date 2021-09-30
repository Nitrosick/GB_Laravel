<?php declare(strict_types=1);

namespace App\Services;

use App\Contract\Parser;
use App\Models\Category;
use App\Models\News;

class ParserService implements Parser
{
   public function parse(string $link): void
   {
	   $xml = \XmlParser::load($link);
	   $data = $xml->parse([
		   'title' => [
			   'uses' => 'channel.title'
		   ],
		   'link' => [
			   'uses' => 'channel.link'
		   ],
           'guid' => [
                'uses' => 'channel.guid'
            ],
		   'description' => [
			   'uses' => 'channel.description'
		   ],
		   'image' => [
			   'uses' => 'channel.image.url'
		   ],
		   'news' => [
			   'uses' => 'channel.item[title,link,guid,description,pubDate]'
		   ]
	   ]);

	   	$tmp = explode('/', $link);
	   	$tag = end($tmp);
	   	$tag = mb_substr($tag, 0, -4);
	   	$category = Category::where('tag', '=', $tag)->first();

	   	foreach ($data['news'] as $value) {
			News::create([
				'guid' => $value['guid'],
				'category_id' => $category->id,
				'link' => $value['link'],
				'title' => $value['title'],
				'description' => $value['description'],
				'created_at' => $value['pubDate']
			]);
	   	}
	}
}
