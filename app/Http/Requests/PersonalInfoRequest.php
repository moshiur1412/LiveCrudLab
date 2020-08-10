<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalInfoRequest extends FormRequest
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
       switch($this->method()) {
        case 'POST': {
            return [
                'name' => 'required|max:200',
                'country' => 'required',
                'city' => 'required_with:country', 
                'skills' => 'required',
                'birthday' => 'required',
                'resume' => 'required|mimes:doc,docx,pdf|max:2048|unique:personal_infos,resume,id',
            ];
        }
        case 'PUT': {
            return [
               'name' => 'required|max:200',
               'country' => 'required',
               'city' => 'required_with:country', 
               'skills' => 'required',
               'birthday' => 'required',
           ];
       }
       default:break;
   }
}


}
