<?php

class RequiredRule {
    private string $message = "";

    public function __construct(string $message = "")
    {
        $this->message = $message;
    }

    public function validate($value): bool
    {
        // return !empty($value); //you can use this
        if (is_null($value)) {
            return false;
        }

        if (is_array($value)) {
            return count($value) > 0;
        }

        if (is_string($value)) {
            // return strlen($value) > 0; jika panjang string lebih besar dari 0
            return $value !== "";
        }

        return true;
    }

    public function getMessage(string $attribute): string
    {
        return $this->message ?: "{$attribute} is required";
    }
}