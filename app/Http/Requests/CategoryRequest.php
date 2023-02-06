<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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

        $roles = [
            'category_name' => ['required','string','min:2','max:100','unique:categorys,category_name'],
            'status' => 'required|in:0,1'
        ];
        if(request()->update_id){
            $roles['category_name'][4] = 'unique:categorys,category_name,'.request()->update_id;
        }

        return $roles;
      
    }
}