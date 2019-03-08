<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$post = new Post();
		$post->title = "abc";
		$post->content = "aaa";
		$post->image = "";
		$post->date = "2019-08-03";
	}
}
