<?php

namespace App\Exceptions;

use Exception;

abstract class BusinessLogicException extends Exception
{
    const VALIDATION_FAILED = 600;
    const SAVING_ERROR = 601;

    abstract public function getStatus(): int;
    abstract public function getStatusMessage(): string;
}