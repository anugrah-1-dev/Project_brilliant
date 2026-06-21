<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = [
		'name',
		'slug',
		'price',
		'admin_tax',
		'duration',
		'type',
		'status',
	];

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}

	public function features()
	{
		return $this->hasMany(CourseFeature::class);
	}
}
