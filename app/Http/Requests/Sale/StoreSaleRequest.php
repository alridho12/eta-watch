<?php

namespace App\Http\Requests\Sale;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
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
        $rule ['fk_id_katalog'] = 'required';
        $rule ['harga_normal'] = 'required';
        $rule ['harga_sales'] = 'required';
        return $rule;
    }

    public function attributes()
    {
        $attribute ['fk_id_katalog'] = 'Katalog';
        $attribute ['harga_normal'] = 'Harga Normal';
        $attribute ['harga_sales'] = 'Harga Sale';
        return $attribute;
    }
}
