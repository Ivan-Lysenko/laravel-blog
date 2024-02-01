<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name' => 'required|unique:articles',
                    'body' => 'required|min:1000',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => [
                        'required',
                        Rule::unique('articles', 'name')->ignore($this->id)
                    ],
                    'body' => 'required|min:1000',
                ];
            }
            default:break;
        }
    }
}
