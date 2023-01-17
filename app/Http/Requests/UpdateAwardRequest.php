<?php

namespace App\Http\Requests;

use App\Models\Award;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAwardRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('award_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'max:255',
                'required',
            ],
        ];
    }
}