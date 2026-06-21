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
		Schema::create('payments', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('student_id')->nullable();
			$table->foreign('student_id', 'fk_payments_to_students')->references('id')->on('students')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->unsignedBigInteger('course_id')->nullable();
			$table->foreign('course_id', 'fk_payments_to_courses')->references('id')->on('courses')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->unsignedBigInteger('period_id')->nullable();
			$table->foreign('period_id', 'fk_periods_to_courses')->references('id')->on('periods')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->unsignedBigInteger('transport_id')->nullable();
			$table->foreign('transport_id', 'fk_transports_to_courses')->references('id')->on('transports')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->unsignedBigInteger('bank_id')->nullable();
			$table->foreign('bank_id', 'fk_banks_to_courses')->references('id')->on('banks')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->integer('total')->nullable();
			$table->string('type')->nullable();
			$table->text('attachment')->nullable();
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
		Schema::dropIfExists('payments');
	}
};
