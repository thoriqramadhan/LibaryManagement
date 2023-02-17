<?php

namespace App\Http\Requests;

use App\Models\Libary;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class libaryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rule_liblary_unique = Rule::unique('book', 'books');
        if($this->method() !== 'POST'){
            $rule_liblary_unique -> ignore($this->route()->parameter('id'));
        }

        return [
            'books' => ['required',$rule_liblary_unique],
            'user' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'required' => 'isian :attribute harus diisi',
            'user.required' => 'nama pengguna harus diisi'
        ];
    }
    
}

