<?php

namespace App\Http\Requests\Katalog;

use Illuminate\Foundation\Http\FormRequest;

class StoreKatalogRequest extends FormRequest
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
        $rule ['nama_katalog'] = 'required';
        $rule ['fk_id_brand'] = 'required';
        $rule ['deskripsi'] = 'required';
        $rule ['harga'] = 'required';
        $rule ['link'] = 'required';
        $rule ['gambar'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        $rule ['status'] = 'required';

        return $rule;
    }

    public function attributes()
    {
        $attribute ['nama_katalog'] = 'Nama Katalog';
        $attribute ['fk_id_brand'] = 'Brand';
        $attribute ['deskripsi'] = 'Deskripsi';
        $attribute ['harga'] = 'Harga';
        $attribute ['link'] = 'Link';
        $attribute ['gambar'] = 'Gambar';
        $attribute ['status'] = 'Status';

        return $attribute;
    }
}
