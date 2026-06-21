<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permit extends Model
{
	use HasFactory, SoftDeletes;

	protected $dates = [
		'leave_date',
		'arrival_date'
	];

	protected $fillable = [
		'letter_code',
		'permit_category',

		// Informasi Data Diri
		'fullname',
		'classname',
		'camp',
		'invoice_number',
		'leave_date',
		'arrival_date',
		'purpose',

		// Informasi Data Wali / Penanggung Jawab
		'nama_pj',
		'cp_pj',
		'nama_walmur',
		'cp_walmur',
		'ttd_pj',
		'scan_ktp',

		// Informasi Data Officer
		'nama_officer',
		'ttd_officer',
		'memo_pengantar',

		// Informasi Data Lainnya
		'status',

	];
}
