<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public $table = "posts";
	protected $fillable = [
	'category_id',
	'title',
	'slug',
	'description',
	'category_id',
	'created_at'
	];


}
