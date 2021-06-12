<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployee extends FormRequest
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
            'name'      => 'required|max:200',
            'phone'     => 'required|phone:strict',
            'number'    => 'required|max:50',
        ];
    }

    public function attributes()
    {
        return [
            'name' => trans('common.fio'),
            'number' => trans('common.personnel_number'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'phone' => $this->filled('phone') ? preg_replace('/[^0-9+]+/', '', $this->phone) : null,
        ]);
    }
}
