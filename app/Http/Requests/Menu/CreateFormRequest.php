<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class CreateFormRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'content' => 'required'

        ];
    }
    public function messages():array
    {
        return[
            'name.required' => 'Cần nhập tên danh mục',
            'description.required'=>'Cần nhập mô tả',
            'content.required'=>'Cần nhập mô tả chi tiết'

        ];
    }
}
