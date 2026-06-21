<?php

namespace Database\Seeders;

use App\Models\Period;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 * Kalender Akademik Brilliant English Course 2024
	 */
	public function run(): void
	{
		$periods = [
			// Januari

			// Februari

			// Maret

			// April


			// Mei


			// Juni


			// Juli


			// Agustus


			// September


			// Oktober


			// November
			['date' => '2025-11-03'],
			['date' => '2025-11-10'],
			['date' => '2025-11-17'],
			['date' => '2025-11-24'],
			['date' => '2025-11-25'],

			// Desember
			['date' => '2025-12-01'],
			['date' => '2025-12-08'],
			['date' => '2025-12-10'],
			['date' => '2025-12-15'],
			['date' => '2025-12-20'],
			['date' => '2025-12-22'],
			['date' => '2025-12-25'],
			['date' => '2025-12-29'],
		];

		// Period::insert($periods);
		foreach ($periods as $period) {
			Period::create($period);
		}
	}
}
