<?php

namespace App\Exceptions;

use Exception;

class EmptyDataException extends Exception
{
    public string $message;
    public function __construct(string $message = "Data doesn't exists")
    {
        $this->message = $message;
    }

    public function render()
    {
        return false;
    }
}
