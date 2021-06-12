<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Enums\VisitType;
use App\Models\Enums\VisitType2f;

class CreateVisit extends FormRequest
{
    /**
     * {@inheritdoc}
     */
    public function authorize()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            'type' => 'required|in:' . join(',', VisitType::keys()),
            'date' => 'required|datetime',
        ];
    }
}
