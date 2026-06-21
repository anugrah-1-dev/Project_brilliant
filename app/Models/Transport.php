<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transport extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = [
		'name',
		'price',
		'status',
	];

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}
}
