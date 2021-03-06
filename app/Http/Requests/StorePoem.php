<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePoem extends FormRequest
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
            'category' => ['required', 'string'],
            'title' => ['required', 'between:1,50'],
            'body' => ['required'],
            'dynamicTags' => ['array', 'between:1,5']
        ];
    }

    public function messages()
    {
        return [
            'category.string' => '分类类型错误。',
            'dynamicTags.array' => '标签类型错误。',
            'dynamicTags.between' => '标签数量必须介于1-5个之间。'
        ];
    }
}
