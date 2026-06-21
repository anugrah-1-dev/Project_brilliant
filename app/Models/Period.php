<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Period extends Model
{
	use HasFactory, SoftDeletes;

	protected $dates = [
		'date',
	];

	protected $fillable = [
		'date',
	];

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}
}
