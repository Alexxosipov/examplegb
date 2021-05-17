<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CorrectWords implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $blockWords = config('dictionaries.words.blacklist');

        $wordsInRequest = explode(' ', $value);
        return empty(array_intersect($blockWords, $wordsInRequest));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'МАТЕРИТЬСЯ ПЛОХО!!!';
    }
}
