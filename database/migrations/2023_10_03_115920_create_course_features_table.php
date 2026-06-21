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
		Schema::create('course_features', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('course_id')->nullable();
			$table->foreign('course_id', 'fk_course_features_to_courses')->references('id')->on('courses')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->string('feature')->nullable();
			$table->string('status')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('course_features');
	}
};
