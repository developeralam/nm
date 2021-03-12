<?php

namespace App\Http\Requests;

use File;
use App\Models\Product;
use App\CustomTrait\ImageUpload;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    use ImageUpload;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'image' => 'required|image',
            'description' => 'required',
        ];
    }
    //Store Product Data
    public function storeRequest()
    {
        return Product::create([
            'name' => $this->name,
            'image' => $this->file('image')? $this->uploadImage('image', [400, 100], 'product'):'',
            'alt' => $this->alt,
            'description' => $this->description,
        ]);
    }
}
