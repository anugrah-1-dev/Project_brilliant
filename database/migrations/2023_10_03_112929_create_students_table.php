<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('students', function (Blueprint $table) {
			$table->id();
			$table->string('token')->nullable();
			$table->string('fullname');
			$table->date('birth_date')->nullable();
			$table->string('last_education')->nullable();
			$table->string('email')->nullable();
			$table->string('contact_number')->nullable();
			$table->string('province')->nullable();
			$table->string('city')->nullable();
			$table->string('district')->nullable();
			$table->string('village')->nullable();
			$table->text('address')->nullable();
			$table->string('info_web')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('students');
	}
};
