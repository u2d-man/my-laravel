<?php

use Illuminate\Foundation\Http\FormRequest;

class MyPageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
