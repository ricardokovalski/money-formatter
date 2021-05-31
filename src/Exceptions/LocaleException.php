<?php

namespace RicardoKovalski\MoneyFormatter\Exceptions;

use InvalidArgumentException;

class LocaleException extends InvalidArgumentException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
