<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveChallengeRequest extends FormRequest
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
        if ($this->isMethod('PATCH')) {

        return [
            'titulo' => ['min:4'],
            'descripcion' =>[],
            'img' => "image|mimes:jpeg,jpg,webp,png|max:3000",


            ];
        }

        return [
            'titulo' =>['required' ,'min:4'],
            'descripcion' =>['required'],
            'img' => "image|mimes:jpeg,jpg,webp,png|max:3000",
        ];
    }
}
//'img' => "required|image|mimes:jpeg,png|max:3000",
