<?php

namespace App\Http\Requests;

use App\CustomTrait\ImageUpload;
use App\Models\AboutUs;
use Illuminate\Foundation\Http\FormRequest;
use File;

class AboutUsRequest extends FormRequest
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
            'description' => 'required',
            'video_link' => 'required',
        ];
    }

    //Store About Us Data
    public function storeAboutUs()
    {
        return AboutUs::create([
            'title' => $this->title,
            'description' => $this->description,
            'video_link' => $this->video_link,
            'video_thumbnail' => $this->file('video_thumbnail') ? $this->uploadImage('video_thumbnail', [1000, 615], 'aboutus'): '',
            'banner1' => $this->file('banner1') ? $this->uploadImage('banner1', [500, 300], 'aboutus'): '',
            'banner2' => $this->file('banner2') ? $this->uploadImage('banner2', [500, 300], 'aboutus'): '',
            'banner3' => $this->file('banner3') ? $this->uploadImage('banner3', [500, 300], 'aboutus'): '',
            'banner4' => $this->file('banner4') ? $this->uploadImage('banner4', [500, 300], 'aboutus'): '',
        ]);
    }

    //Update About Us Data
    public function updateAboutUs($about){
        if(!empty($this->video_thumbnail)){
            File::delete($about->video_thumbnail);
        }
        if(!empty($this->banner1)){
            File::delete($about->banner1);
        }
        if(!empty($this->banner2)){
            File::delete($about->banner2);
        }
        if(!empty($this->banner3)){
            File::delete($about->banner3);
        }
        if(!empty($this->banner4)){
            File::delete($about->banner4);
        }
        return $about->update([
            'title' => $this->title,
            'description' => $this->description,
            'video_link' => $this->video_link,
            'video_thumbnail' => $this->file('video_thumbnail') ? $this->uploadImage('video_thumbnail', [1000, 615], 'aboutus'): $about->video_thumbnail,
            'banner1' => $this->file('banner1') ? $this->uploadImage('banner1', [500, 300], 'aboutus'): $about->banner1,
            'banner2' => $this->file('banner2') ? $this->uploadImage('banner2', [500, 300], 'aboutus'): $about->banner2,
            'banner3' => $this->file('banner3') ? $this->uploadImage('banner3', [500, 300], 'aboutus'): $about->banner3,
            'banner4' => $this->file('banner4') ? $this->uploadImage('banner4', [500, 300], 'aboutus'): $about->banner4,
        ]);
    }
}
