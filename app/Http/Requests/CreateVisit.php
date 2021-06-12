<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Enums\VisitType;

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
            'date' => 'required|date_format:Y-m-d H:i',
        ];
    }

    protected function prepareForValidation()
    {
        parent::prepareForValidation();

        $this->merge([
            'date' => !empty($this->date) ? ($this->date . ' ' . ($this->time ?? '00:00')) : null,
            'date' => !empty($this->date) ? ($this->date . ' ' . ($this->time ?? '00:00')) : null,
        ]);
    }
}
