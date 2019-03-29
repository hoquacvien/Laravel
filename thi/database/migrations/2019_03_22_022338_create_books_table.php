<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('sach', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('book_name', 180);
			$table->string('author_name', 180);
			$table->text('description');
			$table->date('published_date');
			$table->Integer('book_quantity');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('sach');
	}
}
