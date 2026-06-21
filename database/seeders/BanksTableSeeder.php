<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$banks = [
			[
				'name' => 'BCA',
				'owner' => 'Cristian Sabilal Pussung',
				'number' => '0101824089',
				'status' => 'active',
			],
			[
				'name' => 'BRI',
				'owner' => 'CV. BRILLIANT INDONESIA GROUP',
				'number' => '0411 0149 0000 568',
				'status' => 'active',
			],
			[
				'name' => 'Mandiri',
				'owner' => 'Brilliant Sapta Mandiri',
				'number' => '171 001 000 8889',
				'status' => 'active',
			],
			[
				'name' => 'BNI 1',
				'owner' => 'CV. BRILLIANT INDONESIA GROUP',
				'number' => '1301261602',
				'status' => 'active',
			],
			[
				'name' => 'BNI 2',
				'owner' => 'CRISTIAN SABILAL PUSSUNG',
				'number' => '2000678888',
				'status' => 'active',
			],
		];

		// Bank::insert($banks);
		foreach ($banks as $bank) {
			Bank::create($bank);
		}
	}
}
