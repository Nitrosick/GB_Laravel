<?php declare(strict_types=1);

namespace App\Services;

use App\Contract\Parser;

class ParserService implements Parser
{
   public function parse(string $link): array
   {
	   $xml = \XmlParser::load($link);
	   return $xml->parse([
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
   }
}
