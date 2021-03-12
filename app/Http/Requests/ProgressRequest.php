<?php

namespace App\Http\Requests;

use App\Models\Progress;
use Illuminate\Foundation\Http\FormRequest;

class ProgressRequest extends FormRequest
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
            
        ];
    }
    //Store Progress
    public function storeProgress()
    {
        return Progress::updateOrCreate(['id' => $this->id],[
            'experience' => $this->experience,
            'project' => $this->project,
            'professionals' => $this->professionals,
            'customer' => $this->customer,
        ]);
    }    
}
