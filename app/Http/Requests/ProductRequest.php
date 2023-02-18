<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
         'brand'=>['required','integer'],
         'category'=>['required','integer'],
         'product_name'=>['required','string'],
         'product_slug'=>['required','string','unique:products,product_slug'],
         'product_code'=>['required','string','max:10'],
         'price'=>['required'],
         'quntity'=>['required','integer'],
        //  'future_image'=>['required','image],
         'status'=>['required','in:0,1'],
         'condition'=>'accepted',
        ];

        return $roles;
    }
}
