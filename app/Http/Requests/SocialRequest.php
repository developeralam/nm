<?php

namespace App\Http\Requests;

use App\Models\Social;
use Illuminate\Foundation\Http\FormRequest;

class SocialRequest extends FormRequest
{
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
            //
        ];
    }
    public function storeSocial()
    {
        return Social::updateOrCreate(['id' =>  $this->id], [
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'linkedin' => $this->linkedin,
            'instagram' => $this->instagram,
            'youtube' => $this->youtube,
            'facebook_page' => $this->facebook_page,
        ]);
    }
}
