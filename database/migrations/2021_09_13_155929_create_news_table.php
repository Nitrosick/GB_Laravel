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

			$table->foreignId('category_id')
				->constrained('categories')
				->onDelete('cascade');

            $table->foreignId('source_id')
				->constrained('sources')
				->onDelete('cascade');

			$table->string('title', 255);
            $table->text('description')->nullable();
            $table->string('short', 255)->nullable();
			$table->string('image', 255)->nullable();
			$table->string('author', 50)->nullable();
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
