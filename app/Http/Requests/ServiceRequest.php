<?php

namespace App\Http\Requests;

use App\Models\Service;
use App\CustomTrait\ImageUpload;
use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'image' => 'required',
            'alt' => 'required',
            'description' => 'required',
        ];
    }
    //Store Service
    public function storeService()
    {
        return Service::create([
            'name' => $this->name,
            'image' => $this->file('image') ? $this->uploadImage('image', [370, 240], 'service'): '',
            'alt' => $this->alt,
            'description' => $this->description,
        ]);
    }
}
