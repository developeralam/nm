<?php

namespace App\Http\Requests;

use App\Models\Hero;
use Illuminate\Foundation\Http\FormRequest;
use App\CustomTrait\ImageUpload;
use File;
class HeroRequest extends FormRequest
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
            'img' => 'required',
        ];
    }
    public function storeHero()
    {
        return Hero::create([
           'img' => $this->file('img') ? $this->uploadImage('img', [1500, 610], 'hero'): '',
           'alt' => $this->alt,
           'title' => $this->title,
           'caption' => $this->caption,
        ]);
    }
}
