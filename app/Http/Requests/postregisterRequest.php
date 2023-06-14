<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postregisterRequest extends FormRequest
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
        return [

            'aka_name'=> 'unique:users|min:3|max:100',
            'first_name'=>'required|min:3|max:100',
            'middle_name'=>'required|min:3|max:100',
            'social_name'=> 'required|unique:users',
            'surname'=>'required|min:3|max:100',
            'date_of_birth'=>'required| min:8|max:10',
            'mobile'=> 'required|min:11|max:20',
            'gender_identity_id'=>'required',
            'mobile'=> 'required|min:11|mx:13',
            'email'=> 'required|email|unique:users|min:6|max:191',
            'email_confirm'=> 'required|same:email',
            'user_type_id'=> 'required|min:1|max:2',
            'document_type_id'=> 'required|min:1|max:2',
            'document_number'=>'required|min:5|max:32',
            'department_id'=> 'required',
            'position_id'=> "required",
            'password' => 'min:5|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation'=> 'required|same:password|min:5',
            'is_active' =>'accepted',
            'terms'=>'accepted',
        ];
    }
}
