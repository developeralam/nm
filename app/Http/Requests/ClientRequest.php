<?php

namespace App\Http\Requests;

use App\Models\Client;
use App\CustomTrait\ImageUpload;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'image' => 'required',
            'link' => 'required',
        ];
    }
    //Store Client
    public function storeClient()
    {
        return Client::create([
            'image' => $this->file('image') ? $this->uploadImage('image', [200, 150], 'client'): '',
            'link' => $this->link,
        ]);
    }
}
