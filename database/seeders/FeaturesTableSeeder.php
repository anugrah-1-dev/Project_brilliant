<?php

namespace Database\Seeders;

use App\Models\CourseFeature;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$features = [
			// SHORT LEARNING 1
			[
				'course_id' => 1,
				'feature' => 'Free Voucher Brilliant Health Care',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 1,
				'feature' => 'Tempat Tinggal / Camp',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 1,
				'feature' => 'Modul, Competence & Gelang',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 1,
				'feature' => 'Sertifikat',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 1,
				'feature' => 'Bonus Materi Psychotraining & Enterpreneurship',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 1,
				'feature' => 'Pendidikan Budi Pekerti Luhur Etika Sopan Santun Budaya Jawa',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 1,
				'feature' => 'Program 6 Kelas/Hari X 75 Menit',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 1,
				'feature' => 'T-Shirt',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],


			// SHORT LEARNING 2
			[
				'course_id' => 2,
				'feature' => 'Free Voucher Brilliant Health Care',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 2,
				'feature' => 'Tempat Tinggal / Camp',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 2,
				'feature' => 'Modul, Competence & Gelang',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 2,
				'feature' => 'Sertifikat',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 2,
				'feature' => 'Bonus Materi Psychotraining & Enterpreneurship',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 2,
				'feature' => 'Pendidikan Budi Pekerti Luhur Etika Sopan Santun Budaya Jawa',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 2,
				'feature' => 'Program 6 Kelas/Hari X 75 Menit',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 2,
				'feature' => 'T-Shirt',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],


			// REGULER 1
			[
				'course_id' => 3,
				'feature' => 'Free Voucher Brilliant Health Care',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 3,
				'feature' => 'Tempat Tinggal / Camp',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 3,
				'feature' => 'Modul, Competence & Gelang',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 3,
				'feature' => 'Sertifikat',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 3,
				'feature' => 'Bonus Materi Psychotraining & Enterpreneurship',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 3,
				'feature' => 'Pendidikan Budi Pekerti Luhur Etika Sopan Santun Budaya Jawa',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 3,
				'feature' => 'Program 6 Kelas/Hari X 75 Menit',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 3,
				'feature' => 'T-Shirt',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],


			// REGULER 2
			[
				'course_id' => 4,
				'feature' => 'Free Voucher Brilliant Health Care',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 4,
				'feature' => 'Tempat Tinggal / Camp',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 4,
				'feature' => 'Modul, Competence & Gelang',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 4,
				'feature' => 'Sertifikat',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 4,
				'feature' => 'Bonus Materi Psychotraining & Enterpreneurship',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 4,
				'feature' => 'Pendidikan Budi Pekerti Luhur Etika Sopan Santun Budaya Jawa',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 4,
				'feature' => 'Program 6 Kelas/Hari X 75 Menit',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 4,
				'feature' => 'T-Shirt',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],


			// MASTER
			[
				'course_id' => 5,
				'feature' => 'BONUS TOEFL Preparation',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 5,
				'feature' => 'Free Voucher Brilliant Health Care',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 5,
				'feature' => 'Tempat Tinggal / Camp',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 5,
				'feature' => 'Modul, Competence & Gelang',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 5,
				'feature' => 'Sertifikat',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 5,
				'feature' => 'Bonus Materi Psychotraining & Enterpreneurship',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 5,
				'feature' => 'Pendidikan Budi Pekerti Luhur Etika Sopan Santun Budaya Jawa',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 5,
				'feature' => 'Program 6 Kelas/Hari X 75 Menit',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 5,
				'feature' => 'T-Shirt',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],


			// SHORT LEARNING ONLINE
			[
				'course_id' => 6,
				'feature' => '20x Meeting',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 6,
				'feature' => '60 Menit/Pertemuan',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 6,
				'feature' => '2x Ujian',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 6,
				'feature' => 'E-Certificate',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],


			// REGULER 1 ONLINE
			[
				'course_id' => 7,
				'feature' => '20x Meeting',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 7,
				'feature' => '60 Menit/Pertemuan',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 7,
				'feature' => '2x Ujian',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 7,
				'feature' => 'E-Certificate',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],


			// REGULER 2 ONLINE
			[
				'course_id' => 8,
				'feature' => '20x Meeting',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 8,
				'feature' => '60 Menit/Pertemuan',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 8,
				'feature' => '2x Ujian',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'course_id' => 8,
				'feature' => 'E-Certificate',
				'status' => 'active',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
		];

		// CourseFeature::insert($features);
		foreach ($features as $feature) {
			CourseFeature::create($feature);
		}
	}
}
