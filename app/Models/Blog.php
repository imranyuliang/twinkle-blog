<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{	
	use SoftDeletes;
    use HasFactory;
    protected $dates =['deleted_at'];
    protected $fillable = ['title', 'body', 'slug', 'meta_title', 'meta_description', 'featured_image'];


	public function category() {
		return $this->belongsToMany(Category::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

}
