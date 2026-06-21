<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComboCourseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$courses = [
			// TYPE - COMBO
			// COMBO - SHORT LEARNING 1
			[
				'name' => 'SHORT LEARNING 1 + HOLIDAY 1',
				'slug' => Str::slug('SHORT LEARNING 1 + HOLIDAY 1') . '-' . Str::lower(Str::random(5)),
				'price' => 744999,
				'admin_tax' => 125000,
				'duration' => '7 HARI + LIBURAN 1 KALI KE BROMO',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'SHORT LEARNING 1 + HOLIDAY 2',
				'slug' => Str::slug('SHORT LEARNING 1 + HOLIDAY 2') . '-' . Str::lower(Str::random(5)),
				'price' => 769999,
				'admin_tax' => 125000,
				'duration' => '7 HARI + LIBURAN KE KAWAH IJEN',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'SHORT LEARNING 1 + HOLIDAY 3',
				'slug' => Str::slug('SHORT LEARNING 1 + HOLIDAY 3') . '-' . Str::lower(Str::random(5)),
				'price' => 1144999,
				'admin_tax' => 125000,
				'duration' => '7 HARI + LIBURAN KE BALI',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'SHORT LEARNING 1 + HOLIDAY 4',
				'slug' => Str::slug('SHORT LEARNING 1 + HOLIDAY 4') . '-' . Str::lower(Str::random(5)),
				'price' => 864999,
				'admin_tax' => 0,
				'duration' => '7 HARI + 1 KALI LIBURAN SNORKELING KE GILIKETAPANG',
				'type' => 'combo',
				'status' => 'active'
			],

			// COMBO - SHORT LEARNING 2
			[
				'name' => 'SHORT LEARNING 2 + HOLIDAY 1',
				'slug' => Str::slug('SHORT LEARNING 2 + HOLIDAY 1') . '-' . Str::lower(Str::random(5)),
				'price' => 1099999,
				'admin_tax' => 125000,
				'duration' => '14 HARI + 1 KALI LIBURAN KE BROMO',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'SHORT LEARNING 2 + HOLIDAY 2',
				'slug' => Str::slug('SHORT LEARNING 2 + HOLIDAY 2') . '-' . Str::lower(Str::random(5)),
				'price' => 1124999,
				'admin_tax' => 125000,
				'duration' => '14 HARI + 1 KALI LIBURAN KE KAWAH IJEN',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'SHORT LEARNING 2 + HOLIDAY 3',
				'slug' => Str::slug('SHORT LEARNING 2 + HOLIDAY 3') . '-' . Str::lower(Str::random(5)),
				'price' => 1499999,
				'admin_tax' => 125000,
				'duration' => '14 HARI + 1 KALI LIBURAN KE BALI',
				'type' => 'combo',
				'status' => 'active'
			],

			// COMBO - REGULER 1
			[
				'name' => 'PAKET REGULER 1 + HOLIDAY 1',
				'slug' => Str::slug('PAKET REGULER 1 + HOLIDAY 1') . '-' . Str::lower(Str::random(5)),
				'price' => 1648999,
				'admin_tax' => 0,
				'duration' => '30 HARI + 1 KALI LIBURAN KE BROMO',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'PAKET REGULER 1 + HOLIDAY 2',
				'slug' => Str::slug('PAKET REGULER 1 + HOLIDAY 2') . '-' . Str::lower(Str::random(5)),
				'price' => 1673999,
				'admin_tax' => 0,
				'duration' => '30 HARI + 1 X LIBURAN KE KAWAH IJEN',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'PAKET REGULER 1 + HOLIDAY 3',
				'slug' => Str::slug('PAKET REGULER 1 + HOLIDAY 3') . '-' . Str::lower(Str::random(5)),
				'price' => 1648999,
				'admin_tax' => 0,
				'duration' => '30 HARI + 1 X LIBURAN KE BALI',
				'type' => 'combo',
				'status' => 'active'
			],

			// COMBO - REGULER 2
			[
				'name' => 'PAKET REGULER 2 + HOLIDAY 1',
				'slug' => Str::slug('PAKET REGULER 2 + HOLIDAY 1') . '-' . Str::lower(Str::random(5)),
				'price' => 2848999,
				'admin_tax' => 0,
				'duration' => '60 HARI + 1 X LIBURAN KE BROMO',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'PAKET REGULER 2 + HOLIDAY 2',
				'slug' => Str::slug('PAKET REGULER 2+ HOLIDAY 2') . '-' . Str::lower(Str::random(5)),
				'price' => 2873999,
				'admin_tax' => 0,
				'duration' => '60 HARI + 1 X LIBURAN KE KAWAH IJEN',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'PAKET REGULER 2 + HOLIDAY 3',
				'slug' => Str::slug('PAKET REGULER 2+ HOLIDAY 3') . '-' . Str::lower(Str::random(5)),
				'price' => 3248999,
				'admin_tax' => 0,
				'duration' => '60 HARI + 1 X LIBURAN KE BALI',
				'type' => 'combo',
				'status' => 'active'
			],

			// COMBO - MASTER
			[
				'name' => 'PAKET MASTER + HOLIDAY 1',
				'slug' => Str::slug('PAKET MASTER + HOLIDAY 1') . '-' . Str::lower(Str::random(5)),
				'price' => 4116999,
				'admin_tax' => 0,
				'duration' => '90 HARI + 1 X LIBURAN KE BROMO',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'PAKET MASTER + HOLIDAY 2',
				'slug' => Str::slug('PAKET MASTER + HOLIDAY 2') . '-' . Str::lower(Str::random(5)),
				'price' => 4141999,
				'admin_tax' => 0,
				'duration' => '90 HARI + 1 X LIBURAN KE KAWAH IJEN',
				'type' => 'combo',
				'status' => 'active'
			],
			[
				'name' => 'PAKET MASTER + HOLIDAY 3',
				'slug' => Str::slug('PAKET MASTER + HOLIDAY 3') . '-' . Str::lower(Str::random(5)),
				'price' => 4516999,
				'admin_tax' => 0,
				'duration' => '90 HARI + 1 X LIBURAN KE BALI',
				'type' => 'combo',
				'status' => 'active'
			],

			// TYPE - HOLIDAY (MEMBER)
			[
				'name' => 'PAKET LIBURAN BROMO',
				'slug' => Str::slug('PAKET LIBURAN BROMO') . '-' . Str::lower(Str::random(5)),
				'price' => 249999,
				'admin_tax' => 0,
				'duration' => '2 HARI',
				'type' => 'holiday-member',
				'status' => 'active'
			],
			[
				'name' => 'PAKET LIBURAN KAWAH IJEN',
				'slug' => Str::slug('PAKET LIBURAN KAWAH IJEN') . '-' . Str::lower(Str::random(5)),
				'price' => 274999,
				'admin_tax' => 0,
				'duration' => '2 HARI',
				'type' => 'holiday-member',
				'status' => 'active'
			],
			[
				'name' => 'PAKET LIBURAN BALI',
				'slug' => Str::slug('PAKET LIBURAN BALI') . '-' . Str::lower(Str::random(5)),
				'price' => 649999,
				'admin_tax' => 0,
				'duration' => '3 HARI',
				'type' => 'holiday-member',
				'status' => 'active'
			],
			[
				'name' => 'PAKET LIBURAN SNORKELING GILI KETAPANG',
				'slug' => Str::slug('PAKET LIBURAN SNORKELING GILI KETAPANG') . '-' . Str::lower(Str::random(5)),
				'price' => 244999,
				'admin_tax' => 0,
				'duration' => '1 HARI',
				'type' => 'holiday-member',
				'status' => 'active'
			],
		];

		// Course::insert($courses);
		foreach ($courses as $course) {
			Course::create($course);
		}
	}
}
