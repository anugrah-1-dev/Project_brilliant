<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		$this->call([
			UsersTableSeeder::class,

			TransportsTableSeeder::class,
			BanksTableSeeder::class,
			PeriodsTableSeeder::class,
			PeriodSeeder::class,
			CoursesTableSeeder::class,
			// ComboCourseSeeder::class,
			FeaturesTableSeeder::class,
			// ComboCourseFeaturesSeeder::class,
		]);
	}
}
