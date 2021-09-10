<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_status()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_available_admin_console()
    {
        $response = $this->get('/admin/news');

        $response->assertStatus(200);
    }

	public function test_available_only_one_news()
	{
		$id = mt_rand(1,20);
		$response = $this->get('/news/' . $id);

		$response->assertStatus(200);
	}

	public function test_categories_data()
	{
		$response = $this->get('/api/data');
		$response->assertJson([
			'id' => '1',
			'name' => 'Sport'
		])->assertStatus(200);
	}

    public function test_view_content()
	{
		$response = $this->get('/welcome');

        $response->assertHeader('title', 'Welcome')->assertStatus(200);
	}
}
