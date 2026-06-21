<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
	use HasFactory, SoftDeletes;

	protected $dates = [
		'birth_date',
	];

	protected $fillable = [
		'period_id',
		'token',
		'fullname',
		'birth_date',
		'last_education',
		'email',
		'contact_number',
		'province',
		'city',
		'district',
		'village',
		'address',
		'info_web',
	];

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}

	public function permits()
	{
		return $this->hasMany(Permit::class);
	}

	public function period()
	{
		return $this->belongsTo(Period::class);
	}
}
