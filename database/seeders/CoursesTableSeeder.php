<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CoursesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$courses = [
			// TYPE - OFFLINE
			[
				'name' => 'SHORT LEARNING 1',
				'slug' => Str::slug('SHORT LEARNING 1') . '-' . Str::lower(Str::random(5)),
				'price' => 495000,
				'admin_tax' => 125000,
				'duration' => '7 hari',
				'type' => 'offline',
				'status' => 'active'
			],
			[
				'name' => 'SHORT LEARNING 2',
				'slug' => Str::slug('SHORT LEARNING 2') . '-' . Str::lower(Str::random(5)),
				'price' => 850000,
				'admin_tax' => 125000,
				'duration' => '14 hari',
				'type' => 'offline',
				'status' => 'active'
			],
			[
				'name' => 'REGULER 1',
				'slug' => Str::slug('REGULER 1') . '-' . Str::lower(Str::random(5)),
				'price' => 1399000,
				'admin_tax' => 0,
				'duration' => '30 HARI',
				'type' => 'offline',
				'status' => 'active'
			],
			[
				'name' => 'REGULER 2',
				'slug' => Str::slug('REGULER 2') . '-' . Str::lower(Str::random(5)),
				'price' => 2599000,
				'admin_tax' => 0,
				'duration' => '60 HARI',
				'type' => 'offline',
				'status' => 'active'
			],
			[
				'name' => 'MASTER',
				'slug' => Str::slug('MASTER') . '-' . Str::lower(Str::random(5)),
				'price' => 3867000,
				'admin_tax' => 0,
				'duration' => '90 HARI',
				'type' => 'offline',
				'status' => 'active'
			],

			// TYPE - ONLINE
			[
				'name' => 'SHORT LEARNING ONLINE',
				'slug' => Str::slug('SHORT LEARNING ONLINE') . '-' . Str::lower(Str::random(5)),
				'price' => 400000,
				'admin_tax' => 0,
				'duration' => '14 HARI',
				'type' => 'online',
				'status' => 'active'
			],
			[
				'name' => 'REGULER 1 ONLINE',
				'slug' => Str::slug('REGULER 1 ONLINE') . '-' . Str::lower(Str::random(5)),
				'price' => 650000,
				'admin_tax' => 0,
				'duration' => '30 HARI',
				'type' => 'online',
				'status' => 'active'
			],
			[
				'name' => 'REGULER 2 ONLINE',
				'slug' => Str::slug('REGULER 2 ONLINE') . '-' . Str::lower(Str::random(5)),
				'price' => 1200000,
				'admin_tax' => 0,
				'duration' => '60 HARI',
				'type' => 'online',
				'status' => 'active'
			],
		];

		// Course::insert($courses);
		foreach ($courses as $course) {
			Course::create($course);
		}
	}
}
