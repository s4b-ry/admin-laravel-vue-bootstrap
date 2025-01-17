<?php

namespace App\Http\Requests\Admin\Setting;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'site_name' => ['required', 'string', 'max:50'],
            'contact_email' => ['required', 'string', 'email', 'max:255'],
            'address' => ['required', 'string', 'max:350'],
        ];
    }
}
