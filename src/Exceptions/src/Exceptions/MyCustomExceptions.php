<?php

namespace Code\Exceptions;

Class MyCustomExceptions extends \Exception
{
    public function __construct(string $message = "My Custom Message" , int $code = 0 , \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}