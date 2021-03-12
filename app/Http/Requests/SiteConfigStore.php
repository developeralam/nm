<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\CustomTrait\ImageUpload;
use App\Models\SiteConfig;
use File;

class SiteConfigStore extends FormRequest
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
            'company_name' => 'required',
            'company_title' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'company_name.required' => 'Please enter your company name',
            'company_title.required' => 'Please enter your company title',
            'address.required' => 'Please enter your company address',
        ];
    }

    public function storeSiteConfig()
    {
        return SiteConfig::create([
            'company_name' => $this->company_name,
            'company_title' => $this->company_title,
            'logo' => $this->file('logo') ? $this->uploadImage('logo', [320, 96], 'site-config'): '',
            'favicon' => $this->file('favicon') ? $this->uploadImage('favicon', [32, 32], 'site-config'):'',
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
            'httext' => $this->httext,
        ]);
    }

    public function updateSiteConfig($siteconfig)
    {
        if(!empty($this->logo)){
            File::delete($siteconfig->logo);
        }
        if(!empty($this->favicon)){
            File::delete($siteconfig->favicon);
        }
        return $siteconfig->update([
            'company_name' => $this->company_name,
            'company_title' => $this->company_title,
            'logo' => $this->file('logo') ? $this->uploadImage('logo', [320, 96], 'site-config'): $siteconfig->logo,
            'favicon' => $this->file('favicon') ? $this->uploadImage('favicon', [32, 32], 'site-config'):$siteconfig->favicon,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
            'httext' => $this->httext,
        ]);
    }
}
