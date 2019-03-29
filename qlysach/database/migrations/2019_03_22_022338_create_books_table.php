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
			$table->string('tensach', 180);
			$table->string('tentacgia', 180);
			$table->text('mota');
			$table->date('date');
			$table->Integer('soluong');
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
