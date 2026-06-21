<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'fullname' => 'required',
			'birth_date' => 'required|date',
			'last_education' => 'required',
			'email' => 'required',
			'contact_number' => 'required',
			'province' => 'required',
			'city' => 'required',
			'district' => 'required',
			'village' => 'required',
			'address' => 'required',
			'info_web' => 'required',
		];
	}

	/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array<string, string>
	 */
	public function messages(): array
	{
		return [
			'fullname.required' => 'Nama Lengkap Harus Diisi',
			'birth_date.required' => 'Tanggal Lahir Harus Diisi',
			'last_education.required' => 'Pendidikan Terakhir Harus Diisi',
			'email.required' => 'Alamat Email Harus Diisi',
			'contact_number.required' => 'Nomor HP Harus Diisi',
			'province.required' => 'Provinsi Harus Diisi',
			'city.required' => 'Kabupaten/Kota Harus Diisi',
			'district.required' => 'Kecamatan Harus Diisi',
			'village.required' => 'Kelurahan Harus Diisi',
			'address.required' => 'Alamat Lengkap Harus Diisi',
			'info_web.required' => 'Informasi Website Harus Diisi',
		];
	}
}
