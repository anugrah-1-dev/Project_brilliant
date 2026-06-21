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
		Schema::create('permits', function (Blueprint $table) {
			$table->id();
			// Tambahan
			$table->string('letter_code');
			$table->string('permit_category')->nullable();

			// Informasi Data Diri
			$table->string('fullname');
			$table->string('classname');
			$table->string('camp')->nullable();
			$table->string('invoice_number')->nullable();
			$table->date('leave_date')->nullable();
			$table->date('arrival_date')->nullable();
			$table->string('purpose')->nullable();

			// Informasi Data Lainnya
			$table->string('nama_pj')->nullable();
			$table->string('cp_pj')->nullable();
			$table->string('nama_walmur')->nullable();
			$table->string('cp_walmur')->nullable();
			$table->text('ttd_pj')->nullable();
			$table->text('scan_ktp')->nullable();

			// Paraf Officer
			$table->string('nama_officer')->nullable();
			$table->text('ttd_officer')->nullable();
			$table->text('memo_pengantar')->nullable();

			// Tambahan
			$table->string('status')->default('pending');

			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('permits');
	}
};
