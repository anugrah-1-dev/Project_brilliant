<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$transports = [
			[
				'name' => 'Tidak Perlu Dijemput',
				'price' => 0,
				'status' => 'active',
			],
			[
				'name' => 'Jemput Stasiun Kediri',
				'price' => 0,
				'status' => 'active',
			],
			[
				'name' => 'Jemput Bandara Juanda Surabaya',
				'price' => 160000,
				'status' => 'active',
			],
			[
				'name' => 'Antar Stasiun Kediri',
				'price' => 85000,
				'status' => 'inactive',
			],
			[
				'name' => 'Antar-Jemput Bandara Juanda Surabaya',
				'price' => 310000,
				'status' => 'inactive',
			],
		];

		// Transport::insert($transports);
		foreach ($transports as $transport) {
			Transport::create($transport);
		}
	}
}
