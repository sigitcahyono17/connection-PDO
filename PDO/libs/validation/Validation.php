<?php

class Validation
{
    private array $errors = [];

    public function makeRule(array $attributes, array $bagRules)
    {
        foreach ($bagRules as $key => $rules) {
            foreach ($rules as $rule) {
               // validate by class
               if (!$rule->isValid($attributes[$key])) {
                 //add error
                 $this->errors[$key][]= $rule->getMessage($key);
               }
            }
        }
    }

    // check is error exists
    public function isErrorsEmpty(): bool
    {
        return count($this->errors) <= 0;
    }


    // get all errors
    public function getErrors(): array
    {
        return $this->errors;
    }
}