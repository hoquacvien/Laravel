<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	protected $table = 'posts';

	protected $fillable = [
		'image',
	];
	public function city() {
		return $this->belongsTo('App\City');
	}
}
