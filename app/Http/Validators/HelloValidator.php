<?php 
namespace App\Http\Validators;

use Illuminate\validation\validator;

class HelloValidator extends Validator
{
    public function validateHello($attribute, $value, $parameters)
    {
        return $value % 2 == 0;
    }
}