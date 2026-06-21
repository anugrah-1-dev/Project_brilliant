<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$user = [
			'name' => 'Admin',
			'email' => 'admin@kampunginggris.com',
			'password' => Hash::make('Brilliant123!@#'),
			'remember_token' => NULL,
		];

		User::insert($user);
	}
}
