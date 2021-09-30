<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('guid')->unique();

			$table->foreignId('category_id')
				->constrained('categories')
				->onDelete('cascade');

            $table->string('link', 255)->nullable();
			$table->string('title', 255);
            $table->text('description')->nullable();
			$table->string('image', 255)->default('news/news-plug.png');
			$table->string('author', 50)->default('Unknown');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
