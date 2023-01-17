<?php

namespace App\Http\Requests;

use App\Models\Star;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStarRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('star_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'max:255',
                'required',
            ],
            'start_date' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'end_date' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'donation' => [
                'required',
            ],
            'limit' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'award_id' => [
                'required',
                'integer',
            ],
            'benefectors.*' => [
                'integer',
            ],
            'benefectors' => [
                'required',
                'array',
            ],
        ];
    }
}