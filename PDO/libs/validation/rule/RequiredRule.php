<?php

class RequiredRule
{
    private string $message;

    public function __construct(string $message = "")
    {
        $this->message = $message;
    }

    public function isValid($value): bool
    {
        // check if variable is null
        if (is_null($value)) {
            return false;
        }

        // if variable is array make sure its more than 1 value
        if (is_array($value)) {
            return count($value) > 0;
        }

        // check if string is empty
        if (is_string($value)) {
            return $value !== "";
        }

        return true;
    }

    public function getMessage($attribute)
    {
        return $this->message ?: "{$attribute} must be required";
    }
}