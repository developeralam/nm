<?php

namespace App\Http\Requests;

use App\CustomTrait\ImageUpload;
use Illuminate\Foundation\Http\FormRequest;
use File;
use App\Models\Team;

class TeamRequest extends FormRequest
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
            'title' => 'required',
            'name' => 'required',
            'image' => 'required',
        ];
    }

    //Store Member
    public function storeTeam()
    {
        return Team::create([
            'title' => $this->title,
            'name' => $this->name,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
            'image' => $this->file('image')? $this->uploadImage('image', [200, 200], 'team'):'',
        ]);
    }
}
