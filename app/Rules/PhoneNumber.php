<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
{
    /**
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value, $parameters = [])
    {
        if (($parameters[0] ?? null) == 'strict') {
            return preg_match('/^\+?(([0-9]){11,13})$/m', $value);
        }
        return true;
    }

    /**
     * @return string
     */
    public function message()
    {
        return trans('The :attribute field contains an invalid number.');
    }
}
