<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = [
		'student_id',
		'course_id',
		'period_id',
		'transport_id',
		'bank_id',
		'total',
		'type',
		'course_payment',
		'transport_payment',
		'status',
	];

	public function bank()
	{
		return $this->belongsTo(Bank::class);
	}

	public function student()
	{
		return $this->belongsTo(Student::class);
	}

	public function transport()
	{
		return $this->belongsTo(Transport::class);
	}

	public function period()
	{
		return $this->belongsTo(Period::class);
	}

	public function course()
	{
		return $this->belongsTo(Course::class);
	}
}
