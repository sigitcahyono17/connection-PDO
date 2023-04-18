<?php

class Validation {
    private array $errors = [];

    public function makeRule(array $attributes, array $ruleBags): void
    {
        foreach ($ruleBags as $key => $rules) { //loop rule attribute first level
            foreach ($rules as $rule) { //loop value for attributes this is instance from RequiredRule
                // $rule = new RequiredRule();
                if (!$rule->validate($attributes[$key])) {
                    $this->errors[$key][] = $rule->getMessage($key);
                }
            }
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}