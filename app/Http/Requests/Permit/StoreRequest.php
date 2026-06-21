<?php

namespace App\Http\Requests\Permit;

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
			'fullname' => 'required|string',
			'classname' => 'required|string',
			'camp' => 'required|string',
			'invoice_number' => 'required|numeric',
			'leave_date' => 'required|date',
			'arrival_date' => 'required|date',
			'purpose' => 'required',

			// 'nama_pj' => 'required|string',
			'cp_pj' => 'required|numeric',
			'nama_walmur' => 'required|string',
			'cp_walmur' => 'required',
			'ttd_pj' => 'required',
			'scan_ktp' => 'required|image',

			'nama_officer' => 'required|string',
			'ttd_officer' => 'required',
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
			'fullname.required' => 'nama lengkap harus diisi',
			'classname.required' => 'nama kelas harus diisi',
			'camp.required' => 'nama camp harus diisi',
			'leave_date.required' => 'tanggal pergi harus diisi',
			'leave_date.date' => 'format tanggal pergi tidak sesuai',
			'arrival_date.required' => 'tanggal pulang harus diisi',
			'arrival_date.date' => 'format tanggal pulang tidak sesuai',
			'purpose.required' => 'tujuan harus diisi',
			'invoice_number.required' => 'nomor kwitansi harus diisi',
			'invoice_number.numeric' => 'nomor kwitansi hanya bisa diisi dengan angka',

			// 'nama_pj.required' => 'nama penanggung jawab harus diisi',
			'cp_pj.required' => 'nomor penanggung jawab harus diisi',
			'cp_pj.numeric' => 'nomor penanggung jawab harus berupa angka',
			'nama_walmur.required' => 'nama wali murid harus diisi',
			'cp_walmur.required' => 'nomor wali murid harus diisi',
			// 'cp_walmur.numeric' => 'nomor wali murid harus berupa angka',
			'ttd_pj.required' => 'tanda tangan penanggung jawab harus diisi',
			'scan_ktp.required' => 'scan ktp tidak boleh kosong',
			'scan_ktp.image' => 'scan ktp harus berupa gambar',

			'nama_officer.required' => 'nama officer harus diisi',
			'ttd_officer.required' => 'tanda tangan officer harus diisi',
		];
	}
}
