<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
	protected $guarded = ['id'];

	public function news(): HasMany
	{
		return $this->hasMany(News::class, 'category_id', 'id');
	}
}
