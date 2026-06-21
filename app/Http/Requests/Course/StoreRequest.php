<?php

namespace App\Http\Requests\Course;

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
			'name' => 'required|unique:App\Models\Course,name',
			'price' => 'required',
			'admin_tax' => 'required',
			'duration' => 'required',
			'type' => 'required',
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
			'name.required' => 'Nama Program Harus Diisi',
			'name.unique' => 'Nama Program Sudah Ada',
			'price.required' => 'Harga Harus Diisi',
			'admin_tax.required' => 'Biaya admin Harus Diisi',
			'duration.required' => 'Durasi Program Harus Diisi',
			'type.required' => 'Tipe Program Harus Diisi',
		];
	}
}
