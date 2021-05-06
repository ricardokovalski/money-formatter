<?php

namespace RicardoKovalski\CurrencyFormatter\Exceptions;

use InvalidArgumentException;

class LocaleException extends InvalidArgumentException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}



